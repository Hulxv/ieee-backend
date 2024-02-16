select cast(round(sum(lat_n),2) as decimal(8,2)), cast(round(sum(long_w),2) as decimal(8,2)) from station;select round(sum(lat_n),2), round(sum(long_w),2) from station;
