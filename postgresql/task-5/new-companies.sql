SELECT
    company_code,
    founder,
    (
        SELECT
            COUNT(DISTINCT lead_manager_code)
        FROM
            Lead_Manager
        WHERE
            company_code = company.company_code
    ),
    (
        SELECT
            COUNT(DISTINCT senior_manager_code)
        FROM
            Senior_Manager
        WHERE
            company_code = company.company_code
    ),
    (
        SELECT
            COUNT(DISTINCT manager_code)
        FROM
            Manager
        WHERE
            company_code = company.company_code
    ),
    (
        SELECT
            COUNT(DISTINCT employee_code)
        FROM
            Employee
        WHERE
            company_code = company.company_code
    )
FROM
    company
GROUP BY
    company_code,
    founder
ORDER BY
    company_code;