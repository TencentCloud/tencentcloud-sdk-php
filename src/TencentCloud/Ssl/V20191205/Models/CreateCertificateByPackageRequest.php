<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateCertificateByPackage请求参数结构体
 *
 * @method integer getProductPid() 获取证书产品PID，以下是对每个PID及其对应的证书文字说明：
1. 1022451 - CFCA-增强型(EV)SSL证书
2. 1022449 - CFCA-企业型(OV) SSL证书(通配符)
3. 1022447 - CFCA-企业型(OV)SSL证书
4. 1014028 - DNSPod亚信国密-企业型(OV)通配符证书
5. 1014030 - DNSPod亚信国密-企业型(OV)多域名证书
6. 1014026 - DNSPod亚信国密-企业型(OV)证书
7. 1014022 - DNSPod亚信国密-域名型(DV)通配符证书
8. 1014024 - DNSPod亚信国密-域名型(DV)多域名证书
9. 1014020 - DNSPod亚信国密-域名型(DV)证书
10. 1013949 - DNSPod SSL 域名型SSL证书(C1)
11. 1013953 - DNSPod SSL域名型多域名SSL证书(C1)
12. 1013951 - DNSPod-SSL域名型DV（泛域名）
13. 1013955 - DNSPod 企业型SSL证书(C1)
14. 1013959 - DNSPod 企业型多域名SSL证书(C1)
15. 1013957 - DNSPod 企业型通配符SSL证书(C1)
16. 1013961 - DNSPod 增强型 SSL 证书(C1)
17. 1013963 - DNSPod 增强型多域名SSL证书(C1)
18. 1005919 - TrustAsia-域名型DV（通配符多域名）
19. 1013882 - SecureSite-增强型专业版EVPro（多域名）
20. 1018559 - SecureSite-增强型专业版EVPro（单域名）
21. 1013910 - GlobalSign-增强型EV（多域名）
22. 1013904 - GlobalSign-增强型EV（单域名）
23. 1013898 - TrustAsia-增强型EV（多域名）
24. 1013888 - TrustAsia-增强型EV（单域名）
25. 1013886 - GeoTrust-增强型EV（多域名）
26. 1018529 - GeoTrust-增强型EV（单域名）
27. 1013880 - SecureSite-增强型EV（多域名）
28. 1018557 - SecureSite-增强型EV（单域名）
29. 1018586 - TrustAsia-域名型DV（泛域名）
30. 1018584 - TrustAsia-域名型DV（多域名）
31. 1013878 - SecureSite-企业型专业版OV Pro（多域名）
32. 1018582 - SecureSite-企业型专业版OV Pro（单域名）
33. 1013908 - GlobalSign-企业型OV（通配符多域名）
34. 1013902 - GlobalSign-企业型OV（泛域名）
35. 1013906 - GlobalSign-企业型OV（多域名）
36. 1013900 - GlobalSign-企业型OV（单域名）
37. 1013896 - TrustAsia-企业型OV（通配符多域名）
38. 1013892 - TrustAsia-企业型OV（泛域名）
39. 1013894 - TrustAsia-企业型OV（多域名）
40. 1013890 - TrustAsia-企业型OV（单域名）
41. 1004360 - GeoTrust-企业型OV（泛域名）
42. 1013884 - GeoTrust-企业型OV（单域名）
43. 1013874 - SecureSite-企业型OV（泛域名）
44. 1013876 - SecureSite-企业型OV（多域名）
45. 1018580 - SecureSite-企业型OV（单域名）
46. 1004460 - DNSPod-国密增强型证书（多域名）
47. 1004458 - DNSPod-国密增强型证书
48. 1004370 - DNSPod-国密企业型证书（通配符）
49. 1004368 - DNSPod-国密企业型证书（多域名）
50. 1004366 - DNSPod-国密企业型证书
51. 1004362 - DNSPod-国密域名型证书（通配符）
52. 1004364 - DNSPod-国密域名型证书（多域名）
53. 1004358 - DNSPod-国密域名型证书
54. 1004456 - WoTrus-增强型证书（多域名）
55. 1004454 - WoTrus-增强型证书
56. 1004168 - WoTrus-企业型证书（通配符）
57. 1004166 - WoTrus-企业型证书（多域名）
58. 1004164 - WoTrus-企业型证书
59. 1004159 - WoTrus-域名型证书（通配符）
60. 1004161 - WoTrus-域名型证书（多域名）
61. 1004157 - WoTrus-域名型证书
 * @method void setProductPid(integer $ProductPid) 设置证书产品PID，以下是对每个PID及其对应的证书文字说明：
1. 1022451 - CFCA-增强型(EV)SSL证书
2. 1022449 - CFCA-企业型(OV) SSL证书(通配符)
3. 1022447 - CFCA-企业型(OV)SSL证书
4. 1014028 - DNSPod亚信国密-企业型(OV)通配符证书
5. 1014030 - DNSPod亚信国密-企业型(OV)多域名证书
6. 1014026 - DNSPod亚信国密-企业型(OV)证书
7. 1014022 - DNSPod亚信国密-域名型(DV)通配符证书
8. 1014024 - DNSPod亚信国密-域名型(DV)多域名证书
9. 1014020 - DNSPod亚信国密-域名型(DV)证书
10. 1013949 - DNSPod SSL 域名型SSL证书(C1)
11. 1013953 - DNSPod SSL域名型多域名SSL证书(C1)
12. 1013951 - DNSPod-SSL域名型DV（泛域名）
13. 1013955 - DNSPod 企业型SSL证书(C1)
14. 1013959 - DNSPod 企业型多域名SSL证书(C1)
15. 1013957 - DNSPod 企业型通配符SSL证书(C1)
16. 1013961 - DNSPod 增强型 SSL 证书(C1)
17. 1013963 - DNSPod 增强型多域名SSL证书(C1)
18. 1005919 - TrustAsia-域名型DV（通配符多域名）
19. 1013882 - SecureSite-增强型专业版EVPro（多域名）
20. 1018559 - SecureSite-增强型专业版EVPro（单域名）
21. 1013910 - GlobalSign-增强型EV（多域名）
22. 1013904 - GlobalSign-增强型EV（单域名）
23. 1013898 - TrustAsia-增强型EV（多域名）
24. 1013888 - TrustAsia-增强型EV（单域名）
25. 1013886 - GeoTrust-增强型EV（多域名）
26. 1018529 - GeoTrust-增强型EV（单域名）
27. 1013880 - SecureSite-增强型EV（多域名）
28. 1018557 - SecureSite-增强型EV（单域名）
29. 1018586 - TrustAsia-域名型DV（泛域名）
30. 1018584 - TrustAsia-域名型DV（多域名）
31. 1013878 - SecureSite-企业型专业版OV Pro（多域名）
32. 1018582 - SecureSite-企业型专业版OV Pro（单域名）
33. 1013908 - GlobalSign-企业型OV（通配符多域名）
34. 1013902 - GlobalSign-企业型OV（泛域名）
35. 1013906 - GlobalSign-企业型OV（多域名）
36. 1013900 - GlobalSign-企业型OV（单域名）
37. 1013896 - TrustAsia-企业型OV（通配符多域名）
38. 1013892 - TrustAsia-企业型OV（泛域名）
39. 1013894 - TrustAsia-企业型OV（多域名）
40. 1013890 - TrustAsia-企业型OV（单域名）
41. 1004360 - GeoTrust-企业型OV（泛域名）
42. 1013884 - GeoTrust-企业型OV（单域名）
43. 1013874 - SecureSite-企业型OV（泛域名）
44. 1013876 - SecureSite-企业型OV（多域名）
45. 1018580 - SecureSite-企业型OV（单域名）
46. 1004460 - DNSPod-国密增强型证书（多域名）
47. 1004458 - DNSPod-国密增强型证书
48. 1004370 - DNSPod-国密企业型证书（通配符）
49. 1004368 - DNSPod-国密企业型证书（多域名）
50. 1004366 - DNSPod-国密企业型证书
51. 1004362 - DNSPod-国密域名型证书（通配符）
52. 1004364 - DNSPod-国密域名型证书（多域名）
53. 1004358 - DNSPod-国密域名型证书
54. 1004456 - WoTrus-增强型证书（多域名）
55. 1004454 - WoTrus-增强型证书
56. 1004168 - WoTrus-企业型证书（通配符）
57. 1004166 - WoTrus-企业型证书（多域名）
58. 1004164 - WoTrus-企业型证书
59. 1004159 - WoTrus-域名型证书（通配符）
60. 1004161 - WoTrus-域名型证书（多域名）
61. 1004157 - WoTrus-域名型证书
 * @method array getPackageIds() 获取要消耗的权益包ID。
 * @method void setPackageIds(array $PackageIds) 设置要消耗的权益包ID。
 * @method string getDomainCount() 获取证书域名数量。
 * @method void setDomainCount(string $DomainCount) 设置证书域名数量。
 * @method integer getPeriod() 获取多年期证书年限。
 * @method void setPeriod(integer $Period) 设置多年期证书年限。
 * @method string getOldCertificateId() 获取要续费的原证书ID（续费时填写）。
 * @method void setOldCertificateId(string $OldCertificateId) 设置要续费的原证书ID（续费时填写）。
 * @method string getRenewGenCsrMethod() 获取续费时CSR生成方式（original、upload、online）。
 * @method void setRenewGenCsrMethod(string $RenewGenCsrMethod) 设置续费时CSR生成方式（original、upload、online）。
 * @method string getRenewCsr() 获取续费时选择上传CSR时填写CSR。
 * @method void setRenewCsr(string $RenewCsr) 设置续费时选择上传CSR时填写CSR。
 * @method string getRenewAlgorithmType() 获取续费证书CSR的算法类型：RSA,ECC,SM2
 * @method void setRenewAlgorithmType(string $RenewAlgorithmType) 设置续费证书CSR的算法类型：RSA,ECC,SM2
 * @method string getRenewAlgorithmParam() 获取续费证书CSR的算法参数:2048,4096,prime256v1
 * @method void setRenewAlgorithmParam(string $RenewAlgorithmParam) 设置续费证书CSR的算法参数:2048,4096,prime256v1
 * @method integer getProjectId() 获取项目ID。
 * @method void setProjectId(integer $ProjectId) 设置项目ID。
 * @method array getTags() 获取标签。
 * @method void setTags(array $Tags) 设置标签。
 * @method string getRenewKeyPass() 获取续费证书的私钥密码。
 * @method void setRenewKeyPass(string $RenewKeyPass) 设置续费证书的私钥密码。
 * @method string getDomainNames() 获取批量购买证书时预填写的域名。
 * @method void setDomainNames(string $DomainNames) 设置批量购买证书时预填写的域名。
 * @method integer getCertificateCount() 获取批量购买证书数量。
 * @method void setCertificateCount(integer $CertificateCount) 设置批量购买证书数量。
 * @method integer getManagerId() 获取预填写的管理人ID。
 * @method void setManagerId(integer $ManagerId) 设置预填写的管理人ID。
 * @method integer getCompanyId() 获取预填写的公司ID。
 * @method void setCompanyId(integer $CompanyId) 设置预填写的公司ID。
 * @method string getVerifyType() 获取验证方式
 * @method void setVerifyType(string $VerifyType) 设置验证方式
 * @method string getPriceKey() 获取询价参数，以下是对每个询价参数及其对应的证书文字说明：
1. sv_ssl_cost_cfca_ca_ev - CFCA-增强型(EV)SSL证书
2. sv_ssl_cost_cfca_ca_ovwildcard - CFCA-企业型(OV) SSL证书(通配符)
3. sv_ssl_cost_cfca_ca_ov - CFCA-企业型(OV)SSL证书
4. sv_ssl_cost_dnspod_ca_sm2_ovwildcard - DNSPod亚信国密-企业型(OV)通配符证书
5. sv_ssl_cost_dnspod_ca_sm2_ovmultidomain - DNSPod亚信国密-企业型(OV)多域名证书
6. sv_ssl_cost_dnspod_ca_sm2_ov - DNSPod亚信国密-企业型(OV)证书
7. sv_ssl_cost_dnspod_ca_sm2_dvwildcard - DNSPod亚信国密-域名型(DV)通配符证书
8. sv_ssl_cost_dnspod_ca_sm2_dvmultidomain - DNSPod亚信国密-域名型(DV)多域名证书
9. sv_ssl_cost_dnspod_ca_sm2_dv - DNSPod亚信国密-域名型(DV)证书
10. sv_ssl_cost_dnspod_ca_dv - DNSPod SSL 域名型SSL证书(C1)
11. sv_ssl_cost_dnspod_ca_dvmultidomain - DNSPod SSL域名型多域名SSL证书(C1)
12. sv_ssl_cost_dnspod_ca_dvwildcard - DNSPod-SSL域名型DV（泛域名）
13. sv_ssl_cost_dnspod_ca_ov - DNSPod 企业型SSL证书(C1)
14. sv_ssl_cost_dnspod_ca_ovmultidomain - DNSPod 企业型多域名SSL证书(C1)
15. sv_ssl_cost_dnspod_ca_ovwildcard - DNSPod 企业型通配符SSL证书(C1)
16. sv_ssl_cost_dnspod_ca_ev - DNSPod 增强型 SSL 证书(C1)
17. sv_ssl_cost_dnspod_ca_evmultidomain - DNSPod 增强型多域名SSL证书(C1)
18. sv_ssl_cost_trustasia_dvwildcardmulti - TrustAsia-域名型DV（通配符多域名）
19. sv_ssl_cost_securesiteevpromul_sh - SecureSite-增强型专业版EVPro（多域名）
20. sv_ssl_cost_symantec_evpro - SecureSite-增强型专业版EVPro（单域名）
21. sv_ssl_cost_globalsign_ev_mul_sh - GlobalSign-增强型EV（多域名）
22. sv_ssl_cost_globalsign_ev - GlobalSign-增强型EV（单域名）
23. sv_ssl_cost_trustasia_evmultidomain - TrustAsia-增强型EV（多域名）
24. sv_ssl_cost_trustasia_ev - TrustAsia-增强型EV（单域名）
25. sv_ssl_cost_geotrust_evmultidomain - GeoTrust-增强型EV（多域名）
26. sv_ssl_cost_geotrust_ev - GeoTrust-增强型EV（单域名）
27. sv_ssl_cost_symantec_evmultidomain - SecureSite-增强型EV（多域名）
28. sv_ssl_cost_symantec_ev - SecureSite-增强型EV（单域名）
29. sv_ssl_cost_trustasia_dvwildcard - TrustAsia-域名型DV（泛域名）
30. sv_ssl_cost_trustasia_dvmultidomain - TrustAsia-域名型DV（多域名）
31. sv_ssl_cost_symantec_ovpromultidomain - SecureSite-企业型专业版OV Pro（多域名）
32. sv_ssl_cost_symantec_ovpro - SecureSite-企业型专业版OV Pro（单域名）
33. sv_ssl_cost_globalsign_ovwildcardmulti - GlobalSign-企业型OV（通配符多域名）
34. sv_ssl_cost_globalsign_ovwildcard - GlobalSign-企业型OV（泛域名）
35. sv_ssl_cost_globalsign_ovmultidomain - GlobalSign-企业型OV（多域名）
36. sv_ssl_cost_globalsign_ov - GlobalSign-企业型OV（单域名）
37. sv_ssl_cost_trustasia_ovwildcardmulti - TrustAsia-企业型OV（通配符多域名）
38. sv_ssl_cost_trustasia_ovwildcard - TrustAsia-企业型OV（泛域名）
39. sv_ssl_cost_trustasia_ovmultidomain - TrustAsia-企业型OV（多域名）
40. sv_ssl_cost_trustasia_ov - TrustAsia-企业型OV（单域名）
41. sv_ssl_cost_geotrust_ovwildcard - GeoTrust-企业型OV（泛域名）
42. sv_ssl_cost_geotrust_ov - GeoTrust-企业型OV（单域名）
43. sv_ssl_cost_symantec_ovwildcard - SecureSite-企业型OV（泛域名）
44. sv_ssl_cost_symantec_ovmultidomain - SecureSite-企业型OV（多域名）
45. sv_ssl_cost_symantec_ov - SecureSite-企业型OV（单域名）
46. sv_ssl_cost_dnspod_evmultidomain - DNSPod-国密增强型证书（多域名）
47. sv_ssl_cost_dnspod_ev - DNSPod-国密增强型证书
48. sv_ssl_cost_dnspod_ovwildcard - DNSPod-国密企业型证书（通配符）
49. sv_ssl_cost_dnspod_ovmultidomain - DNSPod-国密企业型证书（多域名）
50. sv_ssl_cost_dnspod_ov - DNSPod-国密企业型证书
51. sv_ssl_cost_dnspod_dvwildcard - DNSPod-国密域名型证书（通配符）
52. sv_ssl_cost_dnspod_dvmultidomain - DNSPod-国密域名型证书（多域名）
53. sv_ssl_cost_dnspod_dv - DNSPod-国密域名型证书
54. sv_ssl_cost_wotrus_evmultidomain - WoTrus-增强型证书（多域名）
55. sv_ssl_cost_wotrus_ev - WoTrus-增强型证书
56. sv_ssl_cost_wotrus_ovwildcard - WoTrus-企业型证书（通配符）
57. sv_ssl_cost_wotrus_ovmultidomain - WoTrus-企业型证书（多域名）
58. sv_ssl_cost_wotrus_ov - WoTrus-企业型证书
59. sv_ssl_cost_wotrus_dvwildcard - WoTrus-域名型证书（通配符）
60. sv_ssl_cost_wotrus_dvmultidomain - WoTrus-域名型证书（多域名）
61. sv_ssl_cost_wotrus_dv - WoTrus-域名型证书
 * @method void setPriceKey(string $PriceKey) 设置询价参数，以下是对每个询价参数及其对应的证书文字说明：
1. sv_ssl_cost_cfca_ca_ev - CFCA-增强型(EV)SSL证书
2. sv_ssl_cost_cfca_ca_ovwildcard - CFCA-企业型(OV) SSL证书(通配符)
3. sv_ssl_cost_cfca_ca_ov - CFCA-企业型(OV)SSL证书
4. sv_ssl_cost_dnspod_ca_sm2_ovwildcard - DNSPod亚信国密-企业型(OV)通配符证书
5. sv_ssl_cost_dnspod_ca_sm2_ovmultidomain - DNSPod亚信国密-企业型(OV)多域名证书
6. sv_ssl_cost_dnspod_ca_sm2_ov - DNSPod亚信国密-企业型(OV)证书
7. sv_ssl_cost_dnspod_ca_sm2_dvwildcard - DNSPod亚信国密-域名型(DV)通配符证书
8. sv_ssl_cost_dnspod_ca_sm2_dvmultidomain - DNSPod亚信国密-域名型(DV)多域名证书
9. sv_ssl_cost_dnspod_ca_sm2_dv - DNSPod亚信国密-域名型(DV)证书
10. sv_ssl_cost_dnspod_ca_dv - DNSPod SSL 域名型SSL证书(C1)
11. sv_ssl_cost_dnspod_ca_dvmultidomain - DNSPod SSL域名型多域名SSL证书(C1)
12. sv_ssl_cost_dnspod_ca_dvwildcard - DNSPod-SSL域名型DV（泛域名）
13. sv_ssl_cost_dnspod_ca_ov - DNSPod 企业型SSL证书(C1)
14. sv_ssl_cost_dnspod_ca_ovmultidomain - DNSPod 企业型多域名SSL证书(C1)
15. sv_ssl_cost_dnspod_ca_ovwildcard - DNSPod 企业型通配符SSL证书(C1)
16. sv_ssl_cost_dnspod_ca_ev - DNSPod 增强型 SSL 证书(C1)
17. sv_ssl_cost_dnspod_ca_evmultidomain - DNSPod 增强型多域名SSL证书(C1)
18. sv_ssl_cost_trustasia_dvwildcardmulti - TrustAsia-域名型DV（通配符多域名）
19. sv_ssl_cost_securesiteevpromul_sh - SecureSite-增强型专业版EVPro（多域名）
20. sv_ssl_cost_symantec_evpro - SecureSite-增强型专业版EVPro（单域名）
21. sv_ssl_cost_globalsign_ev_mul_sh - GlobalSign-增强型EV（多域名）
22. sv_ssl_cost_globalsign_ev - GlobalSign-增强型EV（单域名）
23. sv_ssl_cost_trustasia_evmultidomain - TrustAsia-增强型EV（多域名）
24. sv_ssl_cost_trustasia_ev - TrustAsia-增强型EV（单域名）
25. sv_ssl_cost_geotrust_evmultidomain - GeoTrust-增强型EV（多域名）
26. sv_ssl_cost_geotrust_ev - GeoTrust-增强型EV（单域名）
27. sv_ssl_cost_symantec_evmultidomain - SecureSite-增强型EV（多域名）
28. sv_ssl_cost_symantec_ev - SecureSite-增强型EV（单域名）
29. sv_ssl_cost_trustasia_dvwildcard - TrustAsia-域名型DV（泛域名）
30. sv_ssl_cost_trustasia_dvmultidomain - TrustAsia-域名型DV（多域名）
31. sv_ssl_cost_symantec_ovpromultidomain - SecureSite-企业型专业版OV Pro（多域名）
32. sv_ssl_cost_symantec_ovpro - SecureSite-企业型专业版OV Pro（单域名）
33. sv_ssl_cost_globalsign_ovwildcardmulti - GlobalSign-企业型OV（通配符多域名）
34. sv_ssl_cost_globalsign_ovwildcard - GlobalSign-企业型OV（泛域名）
35. sv_ssl_cost_globalsign_ovmultidomain - GlobalSign-企业型OV（多域名）
36. sv_ssl_cost_globalsign_ov - GlobalSign-企业型OV（单域名）
37. sv_ssl_cost_trustasia_ovwildcardmulti - TrustAsia-企业型OV（通配符多域名）
38. sv_ssl_cost_trustasia_ovwildcard - TrustAsia-企业型OV（泛域名）
39. sv_ssl_cost_trustasia_ovmultidomain - TrustAsia-企业型OV（多域名）
40. sv_ssl_cost_trustasia_ov - TrustAsia-企业型OV（单域名）
41. sv_ssl_cost_geotrust_ovwildcard - GeoTrust-企业型OV（泛域名）
42. sv_ssl_cost_geotrust_ov - GeoTrust-企业型OV（单域名）
43. sv_ssl_cost_symantec_ovwildcard - SecureSite-企业型OV（泛域名）
44. sv_ssl_cost_symantec_ovmultidomain - SecureSite-企业型OV（多域名）
45. sv_ssl_cost_symantec_ov - SecureSite-企业型OV（单域名）
46. sv_ssl_cost_dnspod_evmultidomain - DNSPod-国密增强型证书（多域名）
47. sv_ssl_cost_dnspod_ev - DNSPod-国密增强型证书
48. sv_ssl_cost_dnspod_ovwildcard - DNSPod-国密企业型证书（通配符）
49. sv_ssl_cost_dnspod_ovmultidomain - DNSPod-国密企业型证书（多域名）
50. sv_ssl_cost_dnspod_ov - DNSPod-国密企业型证书
51. sv_ssl_cost_dnspod_dvwildcard - DNSPod-国密域名型证书（通配符）
52. sv_ssl_cost_dnspod_dvmultidomain - DNSPod-国密域名型证书（多域名）
53. sv_ssl_cost_dnspod_dv - DNSPod-国密域名型证书
54. sv_ssl_cost_wotrus_evmultidomain - WoTrus-增强型证书（多域名）
55. sv_ssl_cost_wotrus_ev - WoTrus-增强型证书
56. sv_ssl_cost_wotrus_ovwildcard - WoTrus-企业型证书（通配符）
57. sv_ssl_cost_wotrus_ovmultidomain - WoTrus-企业型证书（多域名）
58. sv_ssl_cost_wotrus_ov - WoTrus-企业型证书
59. sv_ssl_cost_wotrus_dvwildcard - WoTrus-域名型证书（通配符）
60. sv_ssl_cost_wotrus_dvmultidomain - WoTrus-域名型证书（多域名）
61. sv_ssl_cost_wotrus_dv - WoTrus-域名型证书
 */
class CreateCertificateByPackageRequest extends AbstractModel
{
    /**
     * @var integer 证书产品PID，以下是对每个PID及其对应的证书文字说明：
1. 1022451 - CFCA-增强型(EV)SSL证书
2. 1022449 - CFCA-企业型(OV) SSL证书(通配符)
3. 1022447 - CFCA-企业型(OV)SSL证书
4. 1014028 - DNSPod亚信国密-企业型(OV)通配符证书
5. 1014030 - DNSPod亚信国密-企业型(OV)多域名证书
6. 1014026 - DNSPod亚信国密-企业型(OV)证书
7. 1014022 - DNSPod亚信国密-域名型(DV)通配符证书
8. 1014024 - DNSPod亚信国密-域名型(DV)多域名证书
9. 1014020 - DNSPod亚信国密-域名型(DV)证书
10. 1013949 - DNSPod SSL 域名型SSL证书(C1)
11. 1013953 - DNSPod SSL域名型多域名SSL证书(C1)
12. 1013951 - DNSPod-SSL域名型DV（泛域名）
13. 1013955 - DNSPod 企业型SSL证书(C1)
14. 1013959 - DNSPod 企业型多域名SSL证书(C1)
15. 1013957 - DNSPod 企业型通配符SSL证书(C1)
16. 1013961 - DNSPod 增强型 SSL 证书(C1)
17. 1013963 - DNSPod 增强型多域名SSL证书(C1)
18. 1005919 - TrustAsia-域名型DV（通配符多域名）
19. 1013882 - SecureSite-增强型专业版EVPro（多域名）
20. 1018559 - SecureSite-增强型专业版EVPro（单域名）
21. 1013910 - GlobalSign-增强型EV（多域名）
22. 1013904 - GlobalSign-增强型EV（单域名）
23. 1013898 - TrustAsia-增强型EV（多域名）
24. 1013888 - TrustAsia-增强型EV（单域名）
25. 1013886 - GeoTrust-增强型EV（多域名）
26. 1018529 - GeoTrust-增强型EV（单域名）
27. 1013880 - SecureSite-增强型EV（多域名）
28. 1018557 - SecureSite-增强型EV（单域名）
29. 1018586 - TrustAsia-域名型DV（泛域名）
30. 1018584 - TrustAsia-域名型DV（多域名）
31. 1013878 - SecureSite-企业型专业版OV Pro（多域名）
32. 1018582 - SecureSite-企业型专业版OV Pro（单域名）
33. 1013908 - GlobalSign-企业型OV（通配符多域名）
34. 1013902 - GlobalSign-企业型OV（泛域名）
35. 1013906 - GlobalSign-企业型OV（多域名）
36. 1013900 - GlobalSign-企业型OV（单域名）
37. 1013896 - TrustAsia-企业型OV（通配符多域名）
38. 1013892 - TrustAsia-企业型OV（泛域名）
39. 1013894 - TrustAsia-企业型OV（多域名）
40. 1013890 - TrustAsia-企业型OV（单域名）
41. 1004360 - GeoTrust-企业型OV（泛域名）
42. 1013884 - GeoTrust-企业型OV（单域名）
43. 1013874 - SecureSite-企业型OV（泛域名）
44. 1013876 - SecureSite-企业型OV（多域名）
45. 1018580 - SecureSite-企业型OV（单域名）
46. 1004460 - DNSPod-国密增强型证书（多域名）
47. 1004458 - DNSPod-国密增强型证书
48. 1004370 - DNSPod-国密企业型证书（通配符）
49. 1004368 - DNSPod-国密企业型证书（多域名）
50. 1004366 - DNSPod-国密企业型证书
51. 1004362 - DNSPod-国密域名型证书（通配符）
52. 1004364 - DNSPod-国密域名型证书（多域名）
53. 1004358 - DNSPod-国密域名型证书
54. 1004456 - WoTrus-增强型证书（多域名）
55. 1004454 - WoTrus-增强型证书
56. 1004168 - WoTrus-企业型证书（通配符）
57. 1004166 - WoTrus-企业型证书（多域名）
58. 1004164 - WoTrus-企业型证书
59. 1004159 - WoTrus-域名型证书（通配符）
60. 1004161 - WoTrus-域名型证书（多域名）
61. 1004157 - WoTrus-域名型证书
     */
    public $ProductPid;

    /**
     * @var array 要消耗的权益包ID。
     */
    public $PackageIds;

    /**
     * @var string 证书域名数量。
     */
    public $DomainCount;

    /**
     * @var integer 多年期证书年限。
     */
    public $Period;

    /**
     * @var string 要续费的原证书ID（续费时填写）。
     */
    public $OldCertificateId;

    /**
     * @var string 续费时CSR生成方式（original、upload、online）。
     */
    public $RenewGenCsrMethod;

    /**
     * @var string 续费时选择上传CSR时填写CSR。
     */
    public $RenewCsr;

    /**
     * @var string 续费证书CSR的算法类型：RSA,ECC,SM2
     */
    public $RenewAlgorithmType;

    /**
     * @var string 续费证书CSR的算法参数:2048,4096,prime256v1
     */
    public $RenewAlgorithmParam;

    /**
     * @var integer 项目ID。
     */
    public $ProjectId;

    /**
     * @var array 标签。
     */
    public $Tags;

    /**
     * @var string 续费证书的私钥密码。
     */
    public $RenewKeyPass;

    /**
     * @var string 批量购买证书时预填写的域名。
     */
    public $DomainNames;

    /**
     * @var integer 批量购买证书数量。
     */
    public $CertificateCount;

    /**
     * @var integer 预填写的管理人ID。
     */
    public $ManagerId;

    /**
     * @var integer 预填写的公司ID。
     */
    public $CompanyId;

    /**
     * @var string 验证方式
     */
    public $VerifyType;

    /**
     * @var string 询价参数，以下是对每个询价参数及其对应的证书文字说明：
1. sv_ssl_cost_cfca_ca_ev - CFCA-增强型(EV)SSL证书
2. sv_ssl_cost_cfca_ca_ovwildcard - CFCA-企业型(OV) SSL证书(通配符)
3. sv_ssl_cost_cfca_ca_ov - CFCA-企业型(OV)SSL证书
4. sv_ssl_cost_dnspod_ca_sm2_ovwildcard - DNSPod亚信国密-企业型(OV)通配符证书
5. sv_ssl_cost_dnspod_ca_sm2_ovmultidomain - DNSPod亚信国密-企业型(OV)多域名证书
6. sv_ssl_cost_dnspod_ca_sm2_ov - DNSPod亚信国密-企业型(OV)证书
7. sv_ssl_cost_dnspod_ca_sm2_dvwildcard - DNSPod亚信国密-域名型(DV)通配符证书
8. sv_ssl_cost_dnspod_ca_sm2_dvmultidomain - DNSPod亚信国密-域名型(DV)多域名证书
9. sv_ssl_cost_dnspod_ca_sm2_dv - DNSPod亚信国密-域名型(DV)证书
10. sv_ssl_cost_dnspod_ca_dv - DNSPod SSL 域名型SSL证书(C1)
11. sv_ssl_cost_dnspod_ca_dvmultidomain - DNSPod SSL域名型多域名SSL证书(C1)
12. sv_ssl_cost_dnspod_ca_dvwildcard - DNSPod-SSL域名型DV（泛域名）
13. sv_ssl_cost_dnspod_ca_ov - DNSPod 企业型SSL证书(C1)
14. sv_ssl_cost_dnspod_ca_ovmultidomain - DNSPod 企业型多域名SSL证书(C1)
15. sv_ssl_cost_dnspod_ca_ovwildcard - DNSPod 企业型通配符SSL证书(C1)
16. sv_ssl_cost_dnspod_ca_ev - DNSPod 增强型 SSL 证书(C1)
17. sv_ssl_cost_dnspod_ca_evmultidomain - DNSPod 增强型多域名SSL证书(C1)
18. sv_ssl_cost_trustasia_dvwildcardmulti - TrustAsia-域名型DV（通配符多域名）
19. sv_ssl_cost_securesiteevpromul_sh - SecureSite-增强型专业版EVPro（多域名）
20. sv_ssl_cost_symantec_evpro - SecureSite-增强型专业版EVPro（单域名）
21. sv_ssl_cost_globalsign_ev_mul_sh - GlobalSign-增强型EV（多域名）
22. sv_ssl_cost_globalsign_ev - GlobalSign-增强型EV（单域名）
23. sv_ssl_cost_trustasia_evmultidomain - TrustAsia-增强型EV（多域名）
24. sv_ssl_cost_trustasia_ev - TrustAsia-增强型EV（单域名）
25. sv_ssl_cost_geotrust_evmultidomain - GeoTrust-增强型EV（多域名）
26. sv_ssl_cost_geotrust_ev - GeoTrust-增强型EV（单域名）
27. sv_ssl_cost_symantec_evmultidomain - SecureSite-增强型EV（多域名）
28. sv_ssl_cost_symantec_ev - SecureSite-增强型EV（单域名）
29. sv_ssl_cost_trustasia_dvwildcard - TrustAsia-域名型DV（泛域名）
30. sv_ssl_cost_trustasia_dvmultidomain - TrustAsia-域名型DV（多域名）
31. sv_ssl_cost_symantec_ovpromultidomain - SecureSite-企业型专业版OV Pro（多域名）
32. sv_ssl_cost_symantec_ovpro - SecureSite-企业型专业版OV Pro（单域名）
33. sv_ssl_cost_globalsign_ovwildcardmulti - GlobalSign-企业型OV（通配符多域名）
34. sv_ssl_cost_globalsign_ovwildcard - GlobalSign-企业型OV（泛域名）
35. sv_ssl_cost_globalsign_ovmultidomain - GlobalSign-企业型OV（多域名）
36. sv_ssl_cost_globalsign_ov - GlobalSign-企业型OV（单域名）
37. sv_ssl_cost_trustasia_ovwildcardmulti - TrustAsia-企业型OV（通配符多域名）
38. sv_ssl_cost_trustasia_ovwildcard - TrustAsia-企业型OV（泛域名）
39. sv_ssl_cost_trustasia_ovmultidomain - TrustAsia-企业型OV（多域名）
40. sv_ssl_cost_trustasia_ov - TrustAsia-企业型OV（单域名）
41. sv_ssl_cost_geotrust_ovwildcard - GeoTrust-企业型OV（泛域名）
42. sv_ssl_cost_geotrust_ov - GeoTrust-企业型OV（单域名）
43. sv_ssl_cost_symantec_ovwildcard - SecureSite-企业型OV（泛域名）
44. sv_ssl_cost_symantec_ovmultidomain - SecureSite-企业型OV（多域名）
45. sv_ssl_cost_symantec_ov - SecureSite-企业型OV（单域名）
46. sv_ssl_cost_dnspod_evmultidomain - DNSPod-国密增强型证书（多域名）
47. sv_ssl_cost_dnspod_ev - DNSPod-国密增强型证书
48. sv_ssl_cost_dnspod_ovwildcard - DNSPod-国密企业型证书（通配符）
49. sv_ssl_cost_dnspod_ovmultidomain - DNSPod-国密企业型证书（多域名）
50. sv_ssl_cost_dnspod_ov - DNSPod-国密企业型证书
51. sv_ssl_cost_dnspod_dvwildcard - DNSPod-国密域名型证书（通配符）
52. sv_ssl_cost_dnspod_dvmultidomain - DNSPod-国密域名型证书（多域名）
53. sv_ssl_cost_dnspod_dv - DNSPod-国密域名型证书
54. sv_ssl_cost_wotrus_evmultidomain - WoTrus-增强型证书（多域名）
55. sv_ssl_cost_wotrus_ev - WoTrus-增强型证书
56. sv_ssl_cost_wotrus_ovwildcard - WoTrus-企业型证书（通配符）
57. sv_ssl_cost_wotrus_ovmultidomain - WoTrus-企业型证书（多域名）
58. sv_ssl_cost_wotrus_ov - WoTrus-企业型证书
59. sv_ssl_cost_wotrus_dvwildcard - WoTrus-域名型证书（通配符）
60. sv_ssl_cost_wotrus_dvmultidomain - WoTrus-域名型证书（多域名）
61. sv_ssl_cost_wotrus_dv - WoTrus-域名型证书
     */
    public $PriceKey;

    /**
     * @param integer $ProductPid 证书产品PID，以下是对每个PID及其对应的证书文字说明：
1. 1022451 - CFCA-增强型(EV)SSL证书
2. 1022449 - CFCA-企业型(OV) SSL证书(通配符)
3. 1022447 - CFCA-企业型(OV)SSL证书
4. 1014028 - DNSPod亚信国密-企业型(OV)通配符证书
5. 1014030 - DNSPod亚信国密-企业型(OV)多域名证书
6. 1014026 - DNSPod亚信国密-企业型(OV)证书
7. 1014022 - DNSPod亚信国密-域名型(DV)通配符证书
8. 1014024 - DNSPod亚信国密-域名型(DV)多域名证书
9. 1014020 - DNSPod亚信国密-域名型(DV)证书
10. 1013949 - DNSPod SSL 域名型SSL证书(C1)
11. 1013953 - DNSPod SSL域名型多域名SSL证书(C1)
12. 1013951 - DNSPod-SSL域名型DV（泛域名）
13. 1013955 - DNSPod 企业型SSL证书(C1)
14. 1013959 - DNSPod 企业型多域名SSL证书(C1)
15. 1013957 - DNSPod 企业型通配符SSL证书(C1)
16. 1013961 - DNSPod 增强型 SSL 证书(C1)
17. 1013963 - DNSPod 增强型多域名SSL证书(C1)
18. 1005919 - TrustAsia-域名型DV（通配符多域名）
19. 1013882 - SecureSite-增强型专业版EVPro（多域名）
20. 1018559 - SecureSite-增强型专业版EVPro（单域名）
21. 1013910 - GlobalSign-增强型EV（多域名）
22. 1013904 - GlobalSign-增强型EV（单域名）
23. 1013898 - TrustAsia-增强型EV（多域名）
24. 1013888 - TrustAsia-增强型EV（单域名）
25. 1013886 - GeoTrust-增强型EV（多域名）
26. 1018529 - GeoTrust-增强型EV（单域名）
27. 1013880 - SecureSite-增强型EV（多域名）
28. 1018557 - SecureSite-增强型EV（单域名）
29. 1018586 - TrustAsia-域名型DV（泛域名）
30. 1018584 - TrustAsia-域名型DV（多域名）
31. 1013878 - SecureSite-企业型专业版OV Pro（多域名）
32. 1018582 - SecureSite-企业型专业版OV Pro（单域名）
33. 1013908 - GlobalSign-企业型OV（通配符多域名）
34. 1013902 - GlobalSign-企业型OV（泛域名）
35. 1013906 - GlobalSign-企业型OV（多域名）
36. 1013900 - GlobalSign-企业型OV（单域名）
37. 1013896 - TrustAsia-企业型OV（通配符多域名）
38. 1013892 - TrustAsia-企业型OV（泛域名）
39. 1013894 - TrustAsia-企业型OV（多域名）
40. 1013890 - TrustAsia-企业型OV（单域名）
41. 1004360 - GeoTrust-企业型OV（泛域名）
42. 1013884 - GeoTrust-企业型OV（单域名）
43. 1013874 - SecureSite-企业型OV（泛域名）
44. 1013876 - SecureSite-企业型OV（多域名）
45. 1018580 - SecureSite-企业型OV（单域名）
46. 1004460 - DNSPod-国密增强型证书（多域名）
47. 1004458 - DNSPod-国密增强型证书
48. 1004370 - DNSPod-国密企业型证书（通配符）
49. 1004368 - DNSPod-国密企业型证书（多域名）
50. 1004366 - DNSPod-国密企业型证书
51. 1004362 - DNSPod-国密域名型证书（通配符）
52. 1004364 - DNSPod-国密域名型证书（多域名）
53. 1004358 - DNSPod-国密域名型证书
54. 1004456 - WoTrus-增强型证书（多域名）
55. 1004454 - WoTrus-增强型证书
56. 1004168 - WoTrus-企业型证书（通配符）
57. 1004166 - WoTrus-企业型证书（多域名）
58. 1004164 - WoTrus-企业型证书
59. 1004159 - WoTrus-域名型证书（通配符）
60. 1004161 - WoTrus-域名型证书（多域名）
61. 1004157 - WoTrus-域名型证书
     * @param array $PackageIds 要消耗的权益包ID。
     * @param string $DomainCount 证书域名数量。
     * @param integer $Period 多年期证书年限。
     * @param string $OldCertificateId 要续费的原证书ID（续费时填写）。
     * @param string $RenewGenCsrMethod 续费时CSR生成方式（original、upload、online）。
     * @param string $RenewCsr 续费时选择上传CSR时填写CSR。
     * @param string $RenewAlgorithmType 续费证书CSR的算法类型：RSA,ECC,SM2
     * @param string $RenewAlgorithmParam 续费证书CSR的算法参数:2048,4096,prime256v1
     * @param integer $ProjectId 项目ID。
     * @param array $Tags 标签。
     * @param string $RenewKeyPass 续费证书的私钥密码。
     * @param string $DomainNames 批量购买证书时预填写的域名。
     * @param integer $CertificateCount 批量购买证书数量。
     * @param integer $ManagerId 预填写的管理人ID。
     * @param integer $CompanyId 预填写的公司ID。
     * @param string $VerifyType 验证方式
     * @param string $PriceKey 询价参数，以下是对每个询价参数及其对应的证书文字说明：
1. sv_ssl_cost_cfca_ca_ev - CFCA-增强型(EV)SSL证书
2. sv_ssl_cost_cfca_ca_ovwildcard - CFCA-企业型(OV) SSL证书(通配符)
3. sv_ssl_cost_cfca_ca_ov - CFCA-企业型(OV)SSL证书
4. sv_ssl_cost_dnspod_ca_sm2_ovwildcard - DNSPod亚信国密-企业型(OV)通配符证书
5. sv_ssl_cost_dnspod_ca_sm2_ovmultidomain - DNSPod亚信国密-企业型(OV)多域名证书
6. sv_ssl_cost_dnspod_ca_sm2_ov - DNSPod亚信国密-企业型(OV)证书
7. sv_ssl_cost_dnspod_ca_sm2_dvwildcard - DNSPod亚信国密-域名型(DV)通配符证书
8. sv_ssl_cost_dnspod_ca_sm2_dvmultidomain - DNSPod亚信国密-域名型(DV)多域名证书
9. sv_ssl_cost_dnspod_ca_sm2_dv - DNSPod亚信国密-域名型(DV)证书
10. sv_ssl_cost_dnspod_ca_dv - DNSPod SSL 域名型SSL证书(C1)
11. sv_ssl_cost_dnspod_ca_dvmultidomain - DNSPod SSL域名型多域名SSL证书(C1)
12. sv_ssl_cost_dnspod_ca_dvwildcard - DNSPod-SSL域名型DV（泛域名）
13. sv_ssl_cost_dnspod_ca_ov - DNSPod 企业型SSL证书(C1)
14. sv_ssl_cost_dnspod_ca_ovmultidomain - DNSPod 企业型多域名SSL证书(C1)
15. sv_ssl_cost_dnspod_ca_ovwildcard - DNSPod 企业型通配符SSL证书(C1)
16. sv_ssl_cost_dnspod_ca_ev - DNSPod 增强型 SSL 证书(C1)
17. sv_ssl_cost_dnspod_ca_evmultidomain - DNSPod 增强型多域名SSL证书(C1)
18. sv_ssl_cost_trustasia_dvwildcardmulti - TrustAsia-域名型DV（通配符多域名）
19. sv_ssl_cost_securesiteevpromul_sh - SecureSite-增强型专业版EVPro（多域名）
20. sv_ssl_cost_symantec_evpro - SecureSite-增强型专业版EVPro（单域名）
21. sv_ssl_cost_globalsign_ev_mul_sh - GlobalSign-增强型EV（多域名）
22. sv_ssl_cost_globalsign_ev - GlobalSign-增强型EV（单域名）
23. sv_ssl_cost_trustasia_evmultidomain - TrustAsia-增强型EV（多域名）
24. sv_ssl_cost_trustasia_ev - TrustAsia-增强型EV（单域名）
25. sv_ssl_cost_geotrust_evmultidomain - GeoTrust-增强型EV（多域名）
26. sv_ssl_cost_geotrust_ev - GeoTrust-增强型EV（单域名）
27. sv_ssl_cost_symantec_evmultidomain - SecureSite-增强型EV（多域名）
28. sv_ssl_cost_symantec_ev - SecureSite-增强型EV（单域名）
29. sv_ssl_cost_trustasia_dvwildcard - TrustAsia-域名型DV（泛域名）
30. sv_ssl_cost_trustasia_dvmultidomain - TrustAsia-域名型DV（多域名）
31. sv_ssl_cost_symantec_ovpromultidomain - SecureSite-企业型专业版OV Pro（多域名）
32. sv_ssl_cost_symantec_ovpro - SecureSite-企业型专业版OV Pro（单域名）
33. sv_ssl_cost_globalsign_ovwildcardmulti - GlobalSign-企业型OV（通配符多域名）
34. sv_ssl_cost_globalsign_ovwildcard - GlobalSign-企业型OV（泛域名）
35. sv_ssl_cost_globalsign_ovmultidomain - GlobalSign-企业型OV（多域名）
36. sv_ssl_cost_globalsign_ov - GlobalSign-企业型OV（单域名）
37. sv_ssl_cost_trustasia_ovwildcardmulti - TrustAsia-企业型OV（通配符多域名）
38. sv_ssl_cost_trustasia_ovwildcard - TrustAsia-企业型OV（泛域名）
39. sv_ssl_cost_trustasia_ovmultidomain - TrustAsia-企业型OV（多域名）
40. sv_ssl_cost_trustasia_ov - TrustAsia-企业型OV（单域名）
41. sv_ssl_cost_geotrust_ovwildcard - GeoTrust-企业型OV（泛域名）
42. sv_ssl_cost_geotrust_ov - GeoTrust-企业型OV（单域名）
43. sv_ssl_cost_symantec_ovwildcard - SecureSite-企业型OV（泛域名）
44. sv_ssl_cost_symantec_ovmultidomain - SecureSite-企业型OV（多域名）
45. sv_ssl_cost_symantec_ov - SecureSite-企业型OV（单域名）
46. sv_ssl_cost_dnspod_evmultidomain - DNSPod-国密增强型证书（多域名）
47. sv_ssl_cost_dnspod_ev - DNSPod-国密增强型证书
48. sv_ssl_cost_dnspod_ovwildcard - DNSPod-国密企业型证书（通配符）
49. sv_ssl_cost_dnspod_ovmultidomain - DNSPod-国密企业型证书（多域名）
50. sv_ssl_cost_dnspod_ov - DNSPod-国密企业型证书
51. sv_ssl_cost_dnspod_dvwildcard - DNSPod-国密域名型证书（通配符）
52. sv_ssl_cost_dnspod_dvmultidomain - DNSPod-国密域名型证书（多域名）
53. sv_ssl_cost_dnspod_dv - DNSPod-国密域名型证书
54. sv_ssl_cost_wotrus_evmultidomain - WoTrus-增强型证书（多域名）
55. sv_ssl_cost_wotrus_ev - WoTrus-增强型证书
56. sv_ssl_cost_wotrus_ovwildcard - WoTrus-企业型证书（通配符）
57. sv_ssl_cost_wotrus_ovmultidomain - WoTrus-企业型证书（多域名）
58. sv_ssl_cost_wotrus_ov - WoTrus-企业型证书
59. sv_ssl_cost_wotrus_dvwildcard - WoTrus-域名型证书（通配符）
60. sv_ssl_cost_wotrus_dvmultidomain - WoTrus-域名型证书（多域名）
61. sv_ssl_cost_wotrus_dv - WoTrus-域名型证书
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ProductPid",$param) and $param["ProductPid"] !== null) {
            $this->ProductPid = $param["ProductPid"];
        }

        if (array_key_exists("PackageIds",$param) and $param["PackageIds"] !== null) {
            $this->PackageIds = $param["PackageIds"];
        }

        if (array_key_exists("DomainCount",$param) and $param["DomainCount"] !== null) {
            $this->DomainCount = $param["DomainCount"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("OldCertificateId",$param) and $param["OldCertificateId"] !== null) {
            $this->OldCertificateId = $param["OldCertificateId"];
        }

        if (array_key_exists("RenewGenCsrMethod",$param) and $param["RenewGenCsrMethod"] !== null) {
            $this->RenewGenCsrMethod = $param["RenewGenCsrMethod"];
        }

        if (array_key_exists("RenewCsr",$param) and $param["RenewCsr"] !== null) {
            $this->RenewCsr = $param["RenewCsr"];
        }

        if (array_key_exists("RenewAlgorithmType",$param) and $param["RenewAlgorithmType"] !== null) {
            $this->RenewAlgorithmType = $param["RenewAlgorithmType"];
        }

        if (array_key_exists("RenewAlgorithmParam",$param) and $param["RenewAlgorithmParam"] !== null) {
            $this->RenewAlgorithmParam = $param["RenewAlgorithmParam"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tags();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("RenewKeyPass",$param) and $param["RenewKeyPass"] !== null) {
            $this->RenewKeyPass = $param["RenewKeyPass"];
        }

        if (array_key_exists("DomainNames",$param) and $param["DomainNames"] !== null) {
            $this->DomainNames = $param["DomainNames"];
        }

        if (array_key_exists("CertificateCount",$param) and $param["CertificateCount"] !== null) {
            $this->CertificateCount = $param["CertificateCount"];
        }

        if (array_key_exists("ManagerId",$param) and $param["ManagerId"] !== null) {
            $this->ManagerId = $param["ManagerId"];
        }

        if (array_key_exists("CompanyId",$param) and $param["CompanyId"] !== null) {
            $this->CompanyId = $param["CompanyId"];
        }

        if (array_key_exists("VerifyType",$param) and $param["VerifyType"] !== null) {
            $this->VerifyType = $param["VerifyType"];
        }

        if (array_key_exists("PriceKey",$param) and $param["PriceKey"] !== null) {
            $this->PriceKey = $param["PriceKey"];
        }
    }
}
