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
 * CreateCertificate请求参数结构体
 *
 * @method integer getProductId() 获取<p>证书套餐类型：<br>3：SecureSite 增强型企业版（EV Pro），<br>4：SecureSite 增强型（EV），<br>5：SecureSite 企业型专业版（OV Pro），<br>6：SecureSite 企业型（OV），<br>7：SecureSite 企业型（OV）通配符，<br>8：Geotrust 增强型（EV），<br>9：Geotrust 企业型（OV），<br>10：Geotrust 企业型（OV）通配符，<br>11：TrustAsia 域名型多域名 SSL 证书，<br>12：TrustAsia 域名型（DV）通配符，<br>13：TrustAsia 企业型通配符（OV）SSL 证书（D3），<br>14：TrustAsia 企业型（OV）SSL 证书（D3），<br>15：TrustAsia 企业型多域名 （OV）SSL 证书（D3），<br>16：TrustAsia 增强型 （EV）SSL 证书（D3），<br>17：TrustAsia 增强型多域名（EV）SSL 证书（D3），<br>18：GlobalSign 企业型（OV）SSL 证书，<br>19：GlobalSign 企业型通配符 （OV）SSL 证书，<br>20：GlobalSign 增强型 （EV）SSL 证书，<br>21：TrustAsia 企业型通配符多域名（OV）SSL 证书（D3），<br>22：GlobalSign 企业型多域名（OV）SSL 证书，<br>23：GlobalSign 企业型通配符多域名（OV）SSL 证书，<br>24：GlobalSign 增强型多域名（EV）SSL 证书，<br>25：Wotrus 域名型证书，<br>26：Wotrus 域名型多域名证书，<br>27：Wotrus 域名型通配符证书，<br>28：Wotrus 企业型证书，<br>29：Wotrus 企业型多域名证书，<br>30：Wotrus 企业型通配符证书，<br>31：Wotrus 增强型证书，<br>32：Wotrus 增强型多域名证书，<br>33：WoTrus-国密域名型证书，<br>34：WoTrus-国密域名型证书（多域名），<br>35：WoTrus-国密域名型证书（通配符），<br>37：WoTrus-国密企业型证书，<br>38：WoTrus-国密企业型证书（多域名），<br>39：WoTrus-国密企业型证书（通配符），<br>40：WoTrus-国密增强型证书，<br>41：WoTrus-国密增强型证书（多域名），<br>42：TrustAsia-域名型证书（通配符多域名），<br>43：DNSPod-企业型(OV)SSL证书<br>44：DNSPod-企业型(OV)通配符SSL证书<br>45：DNSPod-企业型(OV)多域名SSL证书<br>46：DNSPod-增强型(EV)SSL证书<br>47：DNSPod-增强型(EV)多域名SSL证书<br>48：DNSPod-域名型(DV)SSL证书<br>49：DNSPod-域名型(DV)通配符SSL证书<br>50：DNSPod-域名型(DV)多域名SSL证书<br>51：DNSPod（国密）-企业型(OV)SSL证书<br>52：DNSPod（国密）-企业型(OV)通配符SSL证书<br>53：DNSPod（国密）-企业型(OV)多域名SSL证书<br>54：DNSPod（国密）-域名型(DV)SSL证书<br>55：DNSPod（国密）-域名型(DV)通配符SSL证书<br>56：DNSPod（国密）-域名型(DV)多域名SSL证书<br>57：SecureSite 企业型专业版多域名(OV Pro)<br>58：SecureSite 企业型多域名(OV)<br>59：SecureSite 增强型专业版多域名(EV Pro)<br>60：SecureSite 增强型多域名(EV)<br>61：Geotrust 增强型多域名(EV)<br>75：SecureSite 企业型(OV)<br>76：SecureSite 企业型(OV)通配符<br>77：SecureSite 增强型(EV)<br>78：Geotrust 企业型(OV)<br>79：Geotrust 企业型(OV)通配符<br>80：Geotrust 增强型(EV)<br>81：GlobalSign 企业型（OV）SSL证书<br>82：GlobalSign 企业型通配符 （OV）SSL证书<br>85：GlobalSign 增强型 （EV）SSL证书<br>88：GlobalSign 企业型通配符多域名 （OV）SSL证书<br>89：GlobalSign 企业型多域名 （OV）SSL证书<br>90：GlobalSign 增强型多域名（EV） SSL证书<br>91：Geotrust 增强型多域名(EV)<br>92：SecureSite 企业型专业版多域名(OV Pro)<br>93：SecureSite 企业型多域名(OV)<br>94：SecureSite 增强型专业版多域名(EV Pro)<br>95：SecureSite 增强型多域名(EV)<br>96：SecureSite 增强型专业版(EV Pro)<br>97：SecureSite 企业型专业版(OV Pro)<br>98：CFCA 企业型(OV)SSL证书<br>99：CFCA 企业型多域名(OV)SSL证书，不支持多年期<br>100：CFCA 企业型通配符(OV)SSL证书，不支持多年期<br>101：CFCA 增强型(EV)SSL证书，不支持多年期<br>102:  Rapid-域名型(DV)SSL证书<br>103: Rapid-域名型(DV)SSL证书(通配符)<br>104: TrustAsia-域名型(单域名)<br>105: SSL单域名证书(一年期)</p>
 * @method void setProductId(integer $ProductId) 设置<p>证书套餐类型：<br>3：SecureSite 增强型企业版（EV Pro），<br>4：SecureSite 增强型（EV），<br>5：SecureSite 企业型专业版（OV Pro），<br>6：SecureSite 企业型（OV），<br>7：SecureSite 企业型（OV）通配符，<br>8：Geotrust 增强型（EV），<br>9：Geotrust 企业型（OV），<br>10：Geotrust 企业型（OV）通配符，<br>11：TrustAsia 域名型多域名 SSL 证书，<br>12：TrustAsia 域名型（DV）通配符，<br>13：TrustAsia 企业型通配符（OV）SSL 证书（D3），<br>14：TrustAsia 企业型（OV）SSL 证书（D3），<br>15：TrustAsia 企业型多域名 （OV）SSL 证书（D3），<br>16：TrustAsia 增强型 （EV）SSL 证书（D3），<br>17：TrustAsia 增强型多域名（EV）SSL 证书（D3），<br>18：GlobalSign 企业型（OV）SSL 证书，<br>19：GlobalSign 企业型通配符 （OV）SSL 证书，<br>20：GlobalSign 增强型 （EV）SSL 证书，<br>21：TrustAsia 企业型通配符多域名（OV）SSL 证书（D3），<br>22：GlobalSign 企业型多域名（OV）SSL 证书，<br>23：GlobalSign 企业型通配符多域名（OV）SSL 证书，<br>24：GlobalSign 增强型多域名（EV）SSL 证书，<br>25：Wotrus 域名型证书，<br>26：Wotrus 域名型多域名证书，<br>27：Wotrus 域名型通配符证书，<br>28：Wotrus 企业型证书，<br>29：Wotrus 企业型多域名证书，<br>30：Wotrus 企业型通配符证书，<br>31：Wotrus 增强型证书，<br>32：Wotrus 增强型多域名证书，<br>33：WoTrus-国密域名型证书，<br>34：WoTrus-国密域名型证书（多域名），<br>35：WoTrus-国密域名型证书（通配符），<br>37：WoTrus-国密企业型证书，<br>38：WoTrus-国密企业型证书（多域名），<br>39：WoTrus-国密企业型证书（通配符），<br>40：WoTrus-国密增强型证书，<br>41：WoTrus-国密增强型证书（多域名），<br>42：TrustAsia-域名型证书（通配符多域名），<br>43：DNSPod-企业型(OV)SSL证书<br>44：DNSPod-企业型(OV)通配符SSL证书<br>45：DNSPod-企业型(OV)多域名SSL证书<br>46：DNSPod-增强型(EV)SSL证书<br>47：DNSPod-增强型(EV)多域名SSL证书<br>48：DNSPod-域名型(DV)SSL证书<br>49：DNSPod-域名型(DV)通配符SSL证书<br>50：DNSPod-域名型(DV)多域名SSL证书<br>51：DNSPod（国密）-企业型(OV)SSL证书<br>52：DNSPod（国密）-企业型(OV)通配符SSL证书<br>53：DNSPod（国密）-企业型(OV)多域名SSL证书<br>54：DNSPod（国密）-域名型(DV)SSL证书<br>55：DNSPod（国密）-域名型(DV)通配符SSL证书<br>56：DNSPod（国密）-域名型(DV)多域名SSL证书<br>57：SecureSite 企业型专业版多域名(OV Pro)<br>58：SecureSite 企业型多域名(OV)<br>59：SecureSite 增强型专业版多域名(EV Pro)<br>60：SecureSite 增强型多域名(EV)<br>61：Geotrust 增强型多域名(EV)<br>75：SecureSite 企业型(OV)<br>76：SecureSite 企业型(OV)通配符<br>77：SecureSite 增强型(EV)<br>78：Geotrust 企业型(OV)<br>79：Geotrust 企业型(OV)通配符<br>80：Geotrust 增强型(EV)<br>81：GlobalSign 企业型（OV）SSL证书<br>82：GlobalSign 企业型通配符 （OV）SSL证书<br>85：GlobalSign 增强型 （EV）SSL证书<br>88：GlobalSign 企业型通配符多域名 （OV）SSL证书<br>89：GlobalSign 企业型多域名 （OV）SSL证书<br>90：GlobalSign 增强型多域名（EV） SSL证书<br>91：Geotrust 增强型多域名(EV)<br>92：SecureSite 企业型专业版多域名(OV Pro)<br>93：SecureSite 企业型多域名(OV)<br>94：SecureSite 增强型专业版多域名(EV Pro)<br>95：SecureSite 增强型多域名(EV)<br>96：SecureSite 增强型专业版(EV Pro)<br>97：SecureSite 企业型专业版(OV Pro)<br>98：CFCA 企业型(OV)SSL证书<br>99：CFCA 企业型多域名(OV)SSL证书，不支持多年期<br>100：CFCA 企业型通配符(OV)SSL证书，不支持多年期<br>101：CFCA 增强型(EV)SSL证书，不支持多年期<br>102:  Rapid-域名型(DV)SSL证书<br>103: Rapid-域名型(DV)SSL证书(通配符)<br>104: TrustAsia-域名型(单域名)<br>105: SSL单域名证书(一年期)</p>
 * @method integer getDomainNum() 获取<p>证书包含的域名数量。 多域名或者多泛域名证书类型必须大于1</p>
 * @method void setDomainNum(integer $DomainNum) 设置<p>证书包含的域名数量。 多域名或者多泛域名证书类型必须大于1</p>
 * @method integer getTimeSpan() 获取<p>证书年限。 支持多年期的证书才可以大于1年</p>
 * @method void setTimeSpan(integer $TimeSpan) 设置<p>证书年限。 支持多年期的证书才可以大于1年</p>
 * @method integer getAutoVoucher() 获取<p>是否自动使用代金券：1是，0否；默认为1</p>
 * @method void setAutoVoucher(integer $AutoVoucher) 设置<p>是否自动使用代金券：1是，0否；默认为1</p>
 * @method array getTags() 获取<p>标签， 生成证书打标签</p>
 * @method void setTags(array $Tags) 设置<p>标签， 生成证书打标签</p>
 */
class CreateCertificateRequest extends AbstractModel
{
    /**
     * @var integer <p>证书套餐类型：<br>3：SecureSite 增强型企业版（EV Pro），<br>4：SecureSite 增强型（EV），<br>5：SecureSite 企业型专业版（OV Pro），<br>6：SecureSite 企业型（OV），<br>7：SecureSite 企业型（OV）通配符，<br>8：Geotrust 增强型（EV），<br>9：Geotrust 企业型（OV），<br>10：Geotrust 企业型（OV）通配符，<br>11：TrustAsia 域名型多域名 SSL 证书，<br>12：TrustAsia 域名型（DV）通配符，<br>13：TrustAsia 企业型通配符（OV）SSL 证书（D3），<br>14：TrustAsia 企业型（OV）SSL 证书（D3），<br>15：TrustAsia 企业型多域名 （OV）SSL 证书（D3），<br>16：TrustAsia 增强型 （EV）SSL 证书（D3），<br>17：TrustAsia 增强型多域名（EV）SSL 证书（D3），<br>18：GlobalSign 企业型（OV）SSL 证书，<br>19：GlobalSign 企业型通配符 （OV）SSL 证书，<br>20：GlobalSign 增强型 （EV）SSL 证书，<br>21：TrustAsia 企业型通配符多域名（OV）SSL 证书（D3），<br>22：GlobalSign 企业型多域名（OV）SSL 证书，<br>23：GlobalSign 企业型通配符多域名（OV）SSL 证书，<br>24：GlobalSign 增强型多域名（EV）SSL 证书，<br>25：Wotrus 域名型证书，<br>26：Wotrus 域名型多域名证书，<br>27：Wotrus 域名型通配符证书，<br>28：Wotrus 企业型证书，<br>29：Wotrus 企业型多域名证书，<br>30：Wotrus 企业型通配符证书，<br>31：Wotrus 增强型证书，<br>32：Wotrus 增强型多域名证书，<br>33：WoTrus-国密域名型证书，<br>34：WoTrus-国密域名型证书（多域名），<br>35：WoTrus-国密域名型证书（通配符），<br>37：WoTrus-国密企业型证书，<br>38：WoTrus-国密企业型证书（多域名），<br>39：WoTrus-国密企业型证书（通配符），<br>40：WoTrus-国密增强型证书，<br>41：WoTrus-国密增强型证书（多域名），<br>42：TrustAsia-域名型证书（通配符多域名），<br>43：DNSPod-企业型(OV)SSL证书<br>44：DNSPod-企业型(OV)通配符SSL证书<br>45：DNSPod-企业型(OV)多域名SSL证书<br>46：DNSPod-增强型(EV)SSL证书<br>47：DNSPod-增强型(EV)多域名SSL证书<br>48：DNSPod-域名型(DV)SSL证书<br>49：DNSPod-域名型(DV)通配符SSL证书<br>50：DNSPod-域名型(DV)多域名SSL证书<br>51：DNSPod（国密）-企业型(OV)SSL证书<br>52：DNSPod（国密）-企业型(OV)通配符SSL证书<br>53：DNSPod（国密）-企业型(OV)多域名SSL证书<br>54：DNSPod（国密）-域名型(DV)SSL证书<br>55：DNSPod（国密）-域名型(DV)通配符SSL证书<br>56：DNSPod（国密）-域名型(DV)多域名SSL证书<br>57：SecureSite 企业型专业版多域名(OV Pro)<br>58：SecureSite 企业型多域名(OV)<br>59：SecureSite 增强型专业版多域名(EV Pro)<br>60：SecureSite 增强型多域名(EV)<br>61：Geotrust 增强型多域名(EV)<br>75：SecureSite 企业型(OV)<br>76：SecureSite 企业型(OV)通配符<br>77：SecureSite 增强型(EV)<br>78：Geotrust 企业型(OV)<br>79：Geotrust 企业型(OV)通配符<br>80：Geotrust 增强型(EV)<br>81：GlobalSign 企业型（OV）SSL证书<br>82：GlobalSign 企业型通配符 （OV）SSL证书<br>85：GlobalSign 增强型 （EV）SSL证书<br>88：GlobalSign 企业型通配符多域名 （OV）SSL证书<br>89：GlobalSign 企业型多域名 （OV）SSL证书<br>90：GlobalSign 增强型多域名（EV） SSL证书<br>91：Geotrust 增强型多域名(EV)<br>92：SecureSite 企业型专业版多域名(OV Pro)<br>93：SecureSite 企业型多域名(OV)<br>94：SecureSite 增强型专业版多域名(EV Pro)<br>95：SecureSite 增强型多域名(EV)<br>96：SecureSite 增强型专业版(EV Pro)<br>97：SecureSite 企业型专业版(OV Pro)<br>98：CFCA 企业型(OV)SSL证书<br>99：CFCA 企业型多域名(OV)SSL证书，不支持多年期<br>100：CFCA 企业型通配符(OV)SSL证书，不支持多年期<br>101：CFCA 增强型(EV)SSL证书，不支持多年期<br>102:  Rapid-域名型(DV)SSL证书<br>103: Rapid-域名型(DV)SSL证书(通配符)<br>104: TrustAsia-域名型(单域名)<br>105: SSL单域名证书(一年期)</p>
     */
    public $ProductId;

    /**
     * @var integer <p>证书包含的域名数量。 多域名或者多泛域名证书类型必须大于1</p>
     */
    public $DomainNum;

    /**
     * @var integer <p>证书年限。 支持多年期的证书才可以大于1年</p>
     */
    public $TimeSpan;

    /**
     * @var integer <p>是否自动使用代金券：1是，0否；默认为1</p>
     */
    public $AutoVoucher;

    /**
     * @var array <p>标签， 生成证书打标签</p>
     */
    public $Tags;

    /**
     * @param integer $ProductId <p>证书套餐类型：<br>3：SecureSite 增强型企业版（EV Pro），<br>4：SecureSite 增强型（EV），<br>5：SecureSite 企业型专业版（OV Pro），<br>6：SecureSite 企业型（OV），<br>7：SecureSite 企业型（OV）通配符，<br>8：Geotrust 增强型（EV），<br>9：Geotrust 企业型（OV），<br>10：Geotrust 企业型（OV）通配符，<br>11：TrustAsia 域名型多域名 SSL 证书，<br>12：TrustAsia 域名型（DV）通配符，<br>13：TrustAsia 企业型通配符（OV）SSL 证书（D3），<br>14：TrustAsia 企业型（OV）SSL 证书（D3），<br>15：TrustAsia 企业型多域名 （OV）SSL 证书（D3），<br>16：TrustAsia 增强型 （EV）SSL 证书（D3），<br>17：TrustAsia 增强型多域名（EV）SSL 证书（D3），<br>18：GlobalSign 企业型（OV）SSL 证书，<br>19：GlobalSign 企业型通配符 （OV）SSL 证书，<br>20：GlobalSign 增强型 （EV）SSL 证书，<br>21：TrustAsia 企业型通配符多域名（OV）SSL 证书（D3），<br>22：GlobalSign 企业型多域名（OV）SSL 证书，<br>23：GlobalSign 企业型通配符多域名（OV）SSL 证书，<br>24：GlobalSign 增强型多域名（EV）SSL 证书，<br>25：Wotrus 域名型证书，<br>26：Wotrus 域名型多域名证书，<br>27：Wotrus 域名型通配符证书，<br>28：Wotrus 企业型证书，<br>29：Wotrus 企业型多域名证书，<br>30：Wotrus 企业型通配符证书，<br>31：Wotrus 增强型证书，<br>32：Wotrus 增强型多域名证书，<br>33：WoTrus-国密域名型证书，<br>34：WoTrus-国密域名型证书（多域名），<br>35：WoTrus-国密域名型证书（通配符），<br>37：WoTrus-国密企业型证书，<br>38：WoTrus-国密企业型证书（多域名），<br>39：WoTrus-国密企业型证书（通配符），<br>40：WoTrus-国密增强型证书，<br>41：WoTrus-国密增强型证书（多域名），<br>42：TrustAsia-域名型证书（通配符多域名），<br>43：DNSPod-企业型(OV)SSL证书<br>44：DNSPod-企业型(OV)通配符SSL证书<br>45：DNSPod-企业型(OV)多域名SSL证书<br>46：DNSPod-增强型(EV)SSL证书<br>47：DNSPod-增强型(EV)多域名SSL证书<br>48：DNSPod-域名型(DV)SSL证书<br>49：DNSPod-域名型(DV)通配符SSL证书<br>50：DNSPod-域名型(DV)多域名SSL证书<br>51：DNSPod（国密）-企业型(OV)SSL证书<br>52：DNSPod（国密）-企业型(OV)通配符SSL证书<br>53：DNSPod（国密）-企业型(OV)多域名SSL证书<br>54：DNSPod（国密）-域名型(DV)SSL证书<br>55：DNSPod（国密）-域名型(DV)通配符SSL证书<br>56：DNSPod（国密）-域名型(DV)多域名SSL证书<br>57：SecureSite 企业型专业版多域名(OV Pro)<br>58：SecureSite 企业型多域名(OV)<br>59：SecureSite 增强型专业版多域名(EV Pro)<br>60：SecureSite 增强型多域名(EV)<br>61：Geotrust 增强型多域名(EV)<br>75：SecureSite 企业型(OV)<br>76：SecureSite 企业型(OV)通配符<br>77：SecureSite 增强型(EV)<br>78：Geotrust 企业型(OV)<br>79：Geotrust 企业型(OV)通配符<br>80：Geotrust 增强型(EV)<br>81：GlobalSign 企业型（OV）SSL证书<br>82：GlobalSign 企业型通配符 （OV）SSL证书<br>85：GlobalSign 增强型 （EV）SSL证书<br>88：GlobalSign 企业型通配符多域名 （OV）SSL证书<br>89：GlobalSign 企业型多域名 （OV）SSL证书<br>90：GlobalSign 增强型多域名（EV） SSL证书<br>91：Geotrust 增强型多域名(EV)<br>92：SecureSite 企业型专业版多域名(OV Pro)<br>93：SecureSite 企业型多域名(OV)<br>94：SecureSite 增强型专业版多域名(EV Pro)<br>95：SecureSite 增强型多域名(EV)<br>96：SecureSite 增强型专业版(EV Pro)<br>97：SecureSite 企业型专业版(OV Pro)<br>98：CFCA 企业型(OV)SSL证书<br>99：CFCA 企业型多域名(OV)SSL证书，不支持多年期<br>100：CFCA 企业型通配符(OV)SSL证书，不支持多年期<br>101：CFCA 增强型(EV)SSL证书，不支持多年期<br>102:  Rapid-域名型(DV)SSL证书<br>103: Rapid-域名型(DV)SSL证书(通配符)<br>104: TrustAsia-域名型(单域名)<br>105: SSL单域名证书(一年期)</p>
     * @param integer $DomainNum <p>证书包含的域名数量。 多域名或者多泛域名证书类型必须大于1</p>
     * @param integer $TimeSpan <p>证书年限。 支持多年期的证书才可以大于1年</p>
     * @param integer $AutoVoucher <p>是否自动使用代金券：1是，0否；默认为1</p>
     * @param array $Tags <p>标签， 生成证书打标签</p>
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
        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("DomainNum",$param) and $param["DomainNum"] !== null) {
            $this->DomainNum = $param["DomainNum"];
        }

        if (array_key_exists("TimeSpan",$param) and $param["TimeSpan"] !== null) {
            $this->TimeSpan = $param["TimeSpan"];
        }

        if (array_key_exists("AutoVoucher",$param) and $param["AutoVoucher"] !== null) {
            $this->AutoVoucher = $param["AutoVoucher"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tags();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
