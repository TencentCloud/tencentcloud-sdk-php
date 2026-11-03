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
namespace TencentCloud\Cvd\V20201104\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateInstances请求参数结构体
 *
 * @method string getInstanceType() 获取<p>实例类型。<li>  S3L.MEDIUM4: 云桌面-标准S3_2核4G </li><li> S3L.LARGE8: 云桌面-标准S3_4核8G </li><li> S3L.LARGE16: 云桌面-标准S3_4核16G </li><li> S3L.2XLARGE16: 云桌面-标准S3_8核16G </li><li> S1L.LARGE8：云桌面-标准S1_4核8G </li><li> S1L.LARGE16：标准S1_4核16G </li><li> S2L.2XLARGE16：标准S2_8核16G </li><li> G1L.LARGE16：图形G1_4核16G  </li><li> G1L.2XLARGE32：图形G1_8核32G </li><li> G1L.4XLARGE64：图形G1_16核64G </li><li> G2L.LARGE24: 云桌面-图形G2_6核24G </li><li> G2L.3XLARGE58: 云桌面-图形G2_14核58G </li><li> G2L.3XLARGE44: 云桌面-图形G2_12核44G </li><li> G3L.LARGE16: 云桌面-图形G3_4核16G </li><li> G3L.5XMEDIUM40: 云桌面-图形G3_10核40G </li><li> G3L.5XLARGE80: 云桌面-图形G3_20核80G </li><li> G4L.5XMEDIUM40: 云桌面-图形G4_10核40G </li><li> G4L.11XMEDIUM80: 云桌面-图形G4_22核80G </li><li> G4L.11XLARGE160: 云桌面-图形G4_44核160G </li><li> G5L.5XMEDIUM40: 云桌面-图形G5_10核40G </li><li> G5L.5XLARGE80: 云桌面-图形G5_22核80G </li><li> G5L.21XMEDIUM160: 云桌面-图形G5_42核160G </li><li> G5L.21XLARGE320: 云桌面-图形G5_84核320G </li><li> G6L.8XLARGE96: 云桌面-图形G6_32核96G </li></p><li> G6L.16XLARGE192: 云桌面-图形G6_64核192G </li><li> G6L.24XLARGE288: 云桌面-图形G6_96核288G </li><li> G6L.32XLARGE384: 云桌面-图形G6_128核384G </li><li> G6L.48XLARGE576: 云桌面-图形G6_192核576G </li><li> G6L.64XLARGE768: 云桌面-图形G6_256核768G </li><li> G6L.96XLARGE1152: 云桌面-图形G6_384核1152G </li><li> G6L.96XLARGE1536: 云桌面-图形G6_384核1536G </li><li> G6L.192XLARGE2304: 云桌面-图形G6_768核2304G </li><li> G6Ls.8XLARGE96: 云桌面-图形G6s_32核96G </li><li> G6Ls.16XLARGE192: 云桌面-图形G6s_64核192G </li><li> G6Ls.24XLARGE288: 云桌面-图形G6s_96核288G </li><li> G6Ls.32XLARGE384: 云桌面-图形G6s_128核384G </li><li> G6Ls.48XLARGE576: 云桌面-图形G6s_192核576G </li><li> G6Ls.64XLARGE768: 云桌面-图形G6s_256核768G </li><li> G6Ls.96XLARGE1152: 云桌面-图形G6s_384核1152G </li><li> G6Ls.96XLARGE1536: 云桌面-图形G6s_384核1536G </li><li> G6Ls.192XLARGE2304: 云桌面-图形G6s_768核2304G </li><li> G8L.8XLARGE96: 云桌面-图形G8_32核96G </li><li> G8L.12XLARGE192: 云桌面-图形G8_48核192G </li><li> G8L.16XLARGE192: 云桌面-图形G8_64核192G </li><li> G8L.24XLARGE384: 云桌面-图形G8_96核384G </li><li> G8L.32XLARGE384: 云桌面-图形G8_128核384G </li><li> G8L.48XLARGE768: 云桌面-图形G8_192核768G </li><li> G8L.64XLARGE768: 云桌面-图形G8_256核768G </li><li> G8L.96XLARGE1536: 云桌面-图形G8_384核1536G </li><li> G9L.12XLARGE192: 云桌面-图形G9_48核192G </li><li> G9L.24XLARGE384: 云桌面-图形G9_96核384G </li><li> G9L.48XLARGE768: 云桌面-图形G9_192核768G </li><li> G9L.96XLARGE1536: 云桌面-图形G9_384核1536G </li><p>枚举值：</p><ul><li>S3L.MEDIUM4： 云桌面-标准S3_2核4G</li><li>S3L.LARGE8： 云桌面-标准S3_4核8G</li><li>S3L.LARGE16： 云桌面-标准S3_4核16G</li><li>S3L.2XLARGE16： 云桌面-标准S3_8核16G</li><li>S1L.LARGE8： 云桌面-标准S1_4核8G</li><li>S1L.LARGE16： 标准S1_4核16G</li><li>S2L.2XLARGE16： 标准S2_8核16G</li><li>G1L.LARGE16： 图形G1_4核16G</li><li>G1L.2XLARGE32： 图形G1_8核32G</li><li>G1L.4XLARGE64： 图形G1_16核64G</li><li>G2L.LARGE24： 云桌面-图形G2_6核24G</li><li>G2L.3XLARGE58： 云桌面-图形G2_14核58G</li><li>G2L.3XLARGE44： 云桌面-图形G2_12核44G</li><li>G3L.LARGE16： 云桌面-图形G3_4核16G</li><li>G3L.5XMEDIUM40： 云桌面-图形G3_10核40G</li><li>G3L.5XLARGE80： 云桌面-图形G3_20核80G</li><li>G4L.5XMEDIUM40： 云桌面-图形G4_10核40G</li><li>G4L.11XMEDIUM80： 云桌面-图形G4_22核80G</li><li>G4L.11XLARGE160： 云桌面-图形G4_44核160G</li><li>G5L.5XMEDIUM40： 云桌面-图形G5_10核40G</li><li>G5L.5XLARGE80： 云桌面-图形G5_22核80G</li><li>G5L.21XMEDIUM160： 云桌面-图形G5_42核160G</li><li>G5L.21XLARGE320： 云桌面-图形G5_84核320G</li><li>G6L.8XLARGE96： 云桌面-图形G6_32核96G</li><li>G6L.16XLARGE192： 云桌面-图形G6_64核192G</li><li>G6L.24XLARGE288： 云桌面-图形G6_96核288G</li><li>G6L.32XLARGE384： 云桌面-图形G6_128核384G</li><li>G6L.48XLARGE576： 云桌面-图形G6_192核576G</li><li>G6L.64XLARGE768： 云桌面-图形G6_256核768G</li><li>G6L.96XLARGE1152： 云桌面-图形G6_384核1152G</li><li>G6L.96XLARGE1536： 云桌面-图形G6_384核1536G</li><li>G6L.192XLARGE2304： 云桌面-图形G6_768核2304G</li><li>G6Ls.8XLARGE96： 云桌面-图形G6s_32核96G</li><li>G6Ls.16XLARGE192： 云桌面-图形G6s_64核192G</li><li>G6Ls.24XLARGE288： 云桌面-图形G6s_96核288G</li><li>G6Ls.32XLARGE384： 云桌面-图形G6s_128核384G</li><li>G6Ls.48XLARGE576： 云桌面-图形G6s_192核576G</li><li>G6Ls.64XLARGE768： 云桌面-图形G6s_256核768G</li><li>G6Ls.96XLARGE1152： 云桌面-图形G6s_384核1152G</li><li>G6Ls.96XLARGE1536： 云桌面-图形G6s_384核1536G</li><li>G6Ls.192XLARGE2304： 云桌面-图形G6s_768核2304G</li><li>G8L.8XLARGE96： 云桌面-图形G8_32核96G</li><li>G8L.12XLARGE192： 云桌面-图形G8_48核192G</li><li>G8L.16XLARGE192： 云桌面-图形G8_64核192G</li><li>G8L.24XLARGE384： 云桌面-图形G8_96核384G</li><li>G8L.32XLARGE384： 云桌面-图形G8_128核384G</li><li>G8L.48XLARGE768： 云桌面-图形G8_192核768G</li><li>G8L.64XLARGE768： 云桌面-图形G8_256核768G</li><li>G8L.96XLARGE1536： 云桌面-图形G8_384核1536G</li><li>G9L.12XLARGE192： 云桌面-图形G9_48核192G</li><li>G9L.24XLARGE384： 云桌面-图形G9_96核384G</li><li>G9L.48XLARGE768： 云桌面-图形G9_192核768G</li><li>G9L.96XLARGE1536： 云桌面-图形G9_384核1536G</li></ul>
 * @method void setInstanceType(string $InstanceType) 设置<p>实例类型。<li>  S3L.MEDIUM4: 云桌面-标准S3_2核4G </li><li> S3L.LARGE8: 云桌面-标准S3_4核8G </li><li> S3L.LARGE16: 云桌面-标准S3_4核16G </li><li> S3L.2XLARGE16: 云桌面-标准S3_8核16G </li><li> S1L.LARGE8：云桌面-标准S1_4核8G </li><li> S1L.LARGE16：标准S1_4核16G </li><li> S2L.2XLARGE16：标准S2_8核16G </li><li> G1L.LARGE16：图形G1_4核16G  </li><li> G1L.2XLARGE32：图形G1_8核32G </li><li> G1L.4XLARGE64：图形G1_16核64G </li><li> G2L.LARGE24: 云桌面-图形G2_6核24G </li><li> G2L.3XLARGE58: 云桌面-图形G2_14核58G </li><li> G2L.3XLARGE44: 云桌面-图形G2_12核44G </li><li> G3L.LARGE16: 云桌面-图形G3_4核16G </li><li> G3L.5XMEDIUM40: 云桌面-图形G3_10核40G </li><li> G3L.5XLARGE80: 云桌面-图形G3_20核80G </li><li> G4L.5XMEDIUM40: 云桌面-图形G4_10核40G </li><li> G4L.11XMEDIUM80: 云桌面-图形G4_22核80G </li><li> G4L.11XLARGE160: 云桌面-图形G4_44核160G </li><li> G5L.5XMEDIUM40: 云桌面-图形G5_10核40G </li><li> G5L.5XLARGE80: 云桌面-图形G5_22核80G </li><li> G5L.21XMEDIUM160: 云桌面-图形G5_42核160G </li><li> G5L.21XLARGE320: 云桌面-图形G5_84核320G </li><li> G6L.8XLARGE96: 云桌面-图形G6_32核96G </li></p><li> G6L.16XLARGE192: 云桌面-图形G6_64核192G </li><li> G6L.24XLARGE288: 云桌面-图形G6_96核288G </li><li> G6L.32XLARGE384: 云桌面-图形G6_128核384G </li><li> G6L.48XLARGE576: 云桌面-图形G6_192核576G </li><li> G6L.64XLARGE768: 云桌面-图形G6_256核768G </li><li> G6L.96XLARGE1152: 云桌面-图形G6_384核1152G </li><li> G6L.96XLARGE1536: 云桌面-图形G6_384核1536G </li><li> G6L.192XLARGE2304: 云桌面-图形G6_768核2304G </li><li> G6Ls.8XLARGE96: 云桌面-图形G6s_32核96G </li><li> G6Ls.16XLARGE192: 云桌面-图形G6s_64核192G </li><li> G6Ls.24XLARGE288: 云桌面-图形G6s_96核288G </li><li> G6Ls.32XLARGE384: 云桌面-图形G6s_128核384G </li><li> G6Ls.48XLARGE576: 云桌面-图形G6s_192核576G </li><li> G6Ls.64XLARGE768: 云桌面-图形G6s_256核768G </li><li> G6Ls.96XLARGE1152: 云桌面-图形G6s_384核1152G </li><li> G6Ls.96XLARGE1536: 云桌面-图形G6s_384核1536G </li><li> G6Ls.192XLARGE2304: 云桌面-图形G6s_768核2304G </li><li> G8L.8XLARGE96: 云桌面-图形G8_32核96G </li><li> G8L.12XLARGE192: 云桌面-图形G8_48核192G </li><li> G8L.16XLARGE192: 云桌面-图形G8_64核192G </li><li> G8L.24XLARGE384: 云桌面-图形G8_96核384G </li><li> G8L.32XLARGE384: 云桌面-图形G8_128核384G </li><li> G8L.48XLARGE768: 云桌面-图形G8_192核768G </li><li> G8L.64XLARGE768: 云桌面-图形G8_256核768G </li><li> G8L.96XLARGE1536: 云桌面-图形G8_384核1536G </li><li> G9L.12XLARGE192: 云桌面-图形G9_48核192G </li><li> G9L.24XLARGE384: 云桌面-图形G9_96核384G </li><li> G9L.48XLARGE768: 云桌面-图形G9_192核768G </li><li> G9L.96XLARGE1536: 云桌面-图形G9_384核1536G </li><p>枚举值：</p><ul><li>S3L.MEDIUM4： 云桌面-标准S3_2核4G</li><li>S3L.LARGE8： 云桌面-标准S3_4核8G</li><li>S3L.LARGE16： 云桌面-标准S3_4核16G</li><li>S3L.2XLARGE16： 云桌面-标准S3_8核16G</li><li>S1L.LARGE8： 云桌面-标准S1_4核8G</li><li>S1L.LARGE16： 标准S1_4核16G</li><li>S2L.2XLARGE16： 标准S2_8核16G</li><li>G1L.LARGE16： 图形G1_4核16G</li><li>G1L.2XLARGE32： 图形G1_8核32G</li><li>G1L.4XLARGE64： 图形G1_16核64G</li><li>G2L.LARGE24： 云桌面-图形G2_6核24G</li><li>G2L.3XLARGE58： 云桌面-图形G2_14核58G</li><li>G2L.3XLARGE44： 云桌面-图形G2_12核44G</li><li>G3L.LARGE16： 云桌面-图形G3_4核16G</li><li>G3L.5XMEDIUM40： 云桌面-图形G3_10核40G</li><li>G3L.5XLARGE80： 云桌面-图形G3_20核80G</li><li>G4L.5XMEDIUM40： 云桌面-图形G4_10核40G</li><li>G4L.11XMEDIUM80： 云桌面-图形G4_22核80G</li><li>G4L.11XLARGE160： 云桌面-图形G4_44核160G</li><li>G5L.5XMEDIUM40： 云桌面-图形G5_10核40G</li><li>G5L.5XLARGE80： 云桌面-图形G5_22核80G</li><li>G5L.21XMEDIUM160： 云桌面-图形G5_42核160G</li><li>G5L.21XLARGE320： 云桌面-图形G5_84核320G</li><li>G6L.8XLARGE96： 云桌面-图形G6_32核96G</li><li>G6L.16XLARGE192： 云桌面-图形G6_64核192G</li><li>G6L.24XLARGE288： 云桌面-图形G6_96核288G</li><li>G6L.32XLARGE384： 云桌面-图形G6_128核384G</li><li>G6L.48XLARGE576： 云桌面-图形G6_192核576G</li><li>G6L.64XLARGE768： 云桌面-图形G6_256核768G</li><li>G6L.96XLARGE1152： 云桌面-图形G6_384核1152G</li><li>G6L.96XLARGE1536： 云桌面-图形G6_384核1536G</li><li>G6L.192XLARGE2304： 云桌面-图形G6_768核2304G</li><li>G6Ls.8XLARGE96： 云桌面-图形G6s_32核96G</li><li>G6Ls.16XLARGE192： 云桌面-图形G6s_64核192G</li><li>G6Ls.24XLARGE288： 云桌面-图形G6s_96核288G</li><li>G6Ls.32XLARGE384： 云桌面-图形G6s_128核384G</li><li>G6Ls.48XLARGE576： 云桌面-图形G6s_192核576G</li><li>G6Ls.64XLARGE768： 云桌面-图形G6s_256核768G</li><li>G6Ls.96XLARGE1152： 云桌面-图形G6s_384核1152G</li><li>G6Ls.96XLARGE1536： 云桌面-图形G6s_384核1536G</li><li>G6Ls.192XLARGE2304： 云桌面-图形G6s_768核2304G</li><li>G8L.8XLARGE96： 云桌面-图形G8_32核96G</li><li>G8L.12XLARGE192： 云桌面-图形G8_48核192G</li><li>G8L.16XLARGE192： 云桌面-图形G8_64核192G</li><li>G8L.24XLARGE384： 云桌面-图形G8_96核384G</li><li>G8L.32XLARGE384： 云桌面-图形G8_128核384G</li><li>G8L.48XLARGE768： 云桌面-图形G8_192核768G</li><li>G8L.64XLARGE768： 云桌面-图形G8_256核768G</li><li>G8L.96XLARGE1536： 云桌面-图形G8_384核1536G</li><li>G9L.12XLARGE192： 云桌面-图形G9_48核192G</li><li>G9L.24XLARGE384： 云桌面-图形G9_96核384G</li><li>G9L.48XLARGE768： 云桌面-图形G9_192核768G</li><li>G9L.96XLARGE1536： 云桌面-图形G9_384核1536G</li></ul>
 * @method Disk getSystemDisk() 获取<p>系统盘信息</p>
 * @method void setSystemDisk(Disk $SystemDisk) 设置<p>系统盘信息</p>
 * @method string getImageId() 获取<p>镜像ID</p>
 * @method void setImageId(string $ImageId) 设置<p>镜像ID</p>
 * @method VirtualPrivateCloud getVirtualPrivateCloud() 获取<p>私有网络相关信息配置。通过该参数可以指定私有网络的ID，子网ID等信息。</p>
 * @method void setVirtualPrivateCloud(VirtualPrivateCloud $VirtualPrivateCloud) 设置<p>私有网络相关信息配置。通过该参数可以指定私有网络的ID，子网ID等信息。</p>
 * @method string getInstanceName() 获取<p>实例显示名称。</p><li> 如果该字段为空，则采用默认格式：云桌面型号+月日+三位随机数+镜像ID。</li><li> 购买多台实例，如果指定模式串{R:x}，表示生成数字[x, x+n-1]，其中n表示购买实例的数量，例如server_{R:3}，购买1台时，实例显示名称为server_3；购买2台时，实例显示名称分别为server_3，server_4。支持指定多个模式串{R:x}。</li><li> 购买多台实例，如果不指定模式串，则在实例显示名称添加后缀1、2...n，其中n表示购买实例的数量，例如server_，购买2台时，实例显示名称分别为server_1，server_2。</li><li> 最多支持60个字符（包含模式串）。</li>
 * @method void setInstanceName(string $InstanceName) 设置<p>实例显示名称。</p><li> 如果该字段为空，则采用默认格式：云桌面型号+月日+三位随机数+镜像ID。</li><li> 购买多台实例，如果指定模式串{R:x}，表示生成数字[x, x+n-1]，其中n表示购买实例的数量，例如server_{R:3}，购买1台时，实例显示名称为server_3；购买2台时，实例显示名称分别为server_3，server_4。支持指定多个模式串{R:x}。</li><li> 购买多台实例，如果不指定模式串，则在实例显示名称添加后缀1、2...n，其中n表示购买实例的数量，例如server_，购买2台时，实例显示名称分别为server_1，server_2。</li><li> 最多支持60个字符（包含模式串）。</li>
 * @method integer getInstanceCount() 获取<p>购买实例数量。取值范围[1,50]。默认为1</p>
 * @method void setInstanceCount(integer $InstanceCount) 设置<p>购买实例数量。取值范围[1,50]。默认为1</p>
 * @method array getDataDisks() 获取<p>数据盘信息。目前只支持一块数据盘。</p>
 * @method void setDataDisks(array $DataDisks) 设置<p>数据盘信息。目前只支持一块数据盘。</p>
 * @method string getChargeType() 获取<p>实例计费类型。</p><li> PREPAID：预付费，即包年包月</li><li> POSTPAID_BY_HOUR：按小时后付费</li>默认为PREPAID
 * @method void setChargeType(string $ChargeType) 设置<p>实例计费类型。</p><li> PREPAID：预付费，即包年包月</li><li> POSTPAID_BY_HOUR：按小时后付费</li>默认为PREPAID
 * @method ChargePrepaid getChargePrepaid() 获取<p>预付费模式，即包年包月相关参数设置。通过该参数可以指定包年包月实例的购买时长、是否设置自动续费等属性。若指定实例的付费模式为预付费则该参数必传。</p>
 * @method void setChargePrepaid(ChargePrepaid $ChargePrepaid) 设置<p>预付费模式，即包年包月相关参数设置。通过该参数可以指定包年包月实例的购买时长、是否设置自动续费等属性。若指定实例的付费模式为预付费则该参数必传。</p>
 * @method boolean getDryRun() 获取<p>是否只预检此次请求。</p><li> true：发送检查请求，不会创建实例。检查项包括是否填写了必需参数，请求格式，业务限制和库存。如果检查通过，则返回的错误码为DryRunOperation；如果返回其他错误码表示检查没有通过；</li><li> false（默认）：发送正常请求，通过检查后直接创建实例</li>
 * @method void setDryRun(boolean $DryRun) 设置<p>是否只预检此次请求。</p><li> true：发送检查请求，不会创建实例。检查项包括是否填写了必需参数，请求格式，业务限制和库存。如果检查通过，则返回的错误码为DryRunOperation；如果返回其他错误码表示检查没有通过；</li><li> false（默认）：发送正常请求，通过检查后直接创建实例</li>
 * @method boolean getAnonymousAccess() 获取<p>允许绑定用户前的匿名访问。默认值：false。</p>
 * @method void setAnonymousAccess(boolean $AnonymousAccess) 设置<p>允许绑定用户前的匿名访问。默认值：false。</p>
 * @method array getSecurityGroups() 获取<p>关联的安全组ID列表</p>
 * @method void setSecurityGroups(array $SecurityGroups) 设置<p>关联的安全组ID列表</p>
 * @method string getPoolId() 获取<p>桌面池ID</p>
 * @method void setPoolId(string $PoolId) 设置<p>桌面池ID</p>
 * @method array getDomainControlPolicies() 获取<p>域名管控策略ID</p>
 * @method void setDomainControlPolicies(array $DomainControlPolicies) 设置<p>域名管控策略ID</p>
 * @method array getTags() 获取<p>标签，最多10个</p>
 * @method void setTags(array $Tags) 设置<p>标签，最多10个</p>
 * @method string getZone() 获取<p>可用区</p>
 * @method void setZone(string $Zone) 设置<p>可用区</p>
 */
class CreateInstancesRequest extends AbstractModel
{
    /**
     * @var string <p>实例类型。<li>  S3L.MEDIUM4: 云桌面-标准S3_2核4G </li><li> S3L.LARGE8: 云桌面-标准S3_4核8G </li><li> S3L.LARGE16: 云桌面-标准S3_4核16G </li><li> S3L.2XLARGE16: 云桌面-标准S3_8核16G </li><li> S1L.LARGE8：云桌面-标准S1_4核8G </li><li> S1L.LARGE16：标准S1_4核16G </li><li> S2L.2XLARGE16：标准S2_8核16G </li><li> G1L.LARGE16：图形G1_4核16G  </li><li> G1L.2XLARGE32：图形G1_8核32G </li><li> G1L.4XLARGE64：图形G1_16核64G </li><li> G2L.LARGE24: 云桌面-图形G2_6核24G </li><li> G2L.3XLARGE58: 云桌面-图形G2_14核58G </li><li> G2L.3XLARGE44: 云桌面-图形G2_12核44G </li><li> G3L.LARGE16: 云桌面-图形G3_4核16G </li><li> G3L.5XMEDIUM40: 云桌面-图形G3_10核40G </li><li> G3L.5XLARGE80: 云桌面-图形G3_20核80G </li><li> G4L.5XMEDIUM40: 云桌面-图形G4_10核40G </li><li> G4L.11XMEDIUM80: 云桌面-图形G4_22核80G </li><li> G4L.11XLARGE160: 云桌面-图形G4_44核160G </li><li> G5L.5XMEDIUM40: 云桌面-图形G5_10核40G </li><li> G5L.5XLARGE80: 云桌面-图形G5_22核80G </li><li> G5L.21XMEDIUM160: 云桌面-图形G5_42核160G </li><li> G5L.21XLARGE320: 云桌面-图形G5_84核320G </li><li> G6L.8XLARGE96: 云桌面-图形G6_32核96G </li></p><li> G6L.16XLARGE192: 云桌面-图形G6_64核192G </li><li> G6L.24XLARGE288: 云桌面-图形G6_96核288G </li><li> G6L.32XLARGE384: 云桌面-图形G6_128核384G </li><li> G6L.48XLARGE576: 云桌面-图形G6_192核576G </li><li> G6L.64XLARGE768: 云桌面-图形G6_256核768G </li><li> G6L.96XLARGE1152: 云桌面-图形G6_384核1152G </li><li> G6L.96XLARGE1536: 云桌面-图形G6_384核1536G </li><li> G6L.192XLARGE2304: 云桌面-图形G6_768核2304G </li><li> G6Ls.8XLARGE96: 云桌面-图形G6s_32核96G </li><li> G6Ls.16XLARGE192: 云桌面-图形G6s_64核192G </li><li> G6Ls.24XLARGE288: 云桌面-图形G6s_96核288G </li><li> G6Ls.32XLARGE384: 云桌面-图形G6s_128核384G </li><li> G6Ls.48XLARGE576: 云桌面-图形G6s_192核576G </li><li> G6Ls.64XLARGE768: 云桌面-图形G6s_256核768G </li><li> G6Ls.96XLARGE1152: 云桌面-图形G6s_384核1152G </li><li> G6Ls.96XLARGE1536: 云桌面-图形G6s_384核1536G </li><li> G6Ls.192XLARGE2304: 云桌面-图形G6s_768核2304G </li><li> G8L.8XLARGE96: 云桌面-图形G8_32核96G </li><li> G8L.12XLARGE192: 云桌面-图形G8_48核192G </li><li> G8L.16XLARGE192: 云桌面-图形G8_64核192G </li><li> G8L.24XLARGE384: 云桌面-图形G8_96核384G </li><li> G8L.32XLARGE384: 云桌面-图形G8_128核384G </li><li> G8L.48XLARGE768: 云桌面-图形G8_192核768G </li><li> G8L.64XLARGE768: 云桌面-图形G8_256核768G </li><li> G8L.96XLARGE1536: 云桌面-图形G8_384核1536G </li><li> G9L.12XLARGE192: 云桌面-图形G9_48核192G </li><li> G9L.24XLARGE384: 云桌面-图形G9_96核384G </li><li> G9L.48XLARGE768: 云桌面-图形G9_192核768G </li><li> G9L.96XLARGE1536: 云桌面-图形G9_384核1536G </li><p>枚举值：</p><ul><li>S3L.MEDIUM4： 云桌面-标准S3_2核4G</li><li>S3L.LARGE8： 云桌面-标准S3_4核8G</li><li>S3L.LARGE16： 云桌面-标准S3_4核16G</li><li>S3L.2XLARGE16： 云桌面-标准S3_8核16G</li><li>S1L.LARGE8： 云桌面-标准S1_4核8G</li><li>S1L.LARGE16： 标准S1_4核16G</li><li>S2L.2XLARGE16： 标准S2_8核16G</li><li>G1L.LARGE16： 图形G1_4核16G</li><li>G1L.2XLARGE32： 图形G1_8核32G</li><li>G1L.4XLARGE64： 图形G1_16核64G</li><li>G2L.LARGE24： 云桌面-图形G2_6核24G</li><li>G2L.3XLARGE58： 云桌面-图形G2_14核58G</li><li>G2L.3XLARGE44： 云桌面-图形G2_12核44G</li><li>G3L.LARGE16： 云桌面-图形G3_4核16G</li><li>G3L.5XMEDIUM40： 云桌面-图形G3_10核40G</li><li>G3L.5XLARGE80： 云桌面-图形G3_20核80G</li><li>G4L.5XMEDIUM40： 云桌面-图形G4_10核40G</li><li>G4L.11XMEDIUM80： 云桌面-图形G4_22核80G</li><li>G4L.11XLARGE160： 云桌面-图形G4_44核160G</li><li>G5L.5XMEDIUM40： 云桌面-图形G5_10核40G</li><li>G5L.5XLARGE80： 云桌面-图形G5_22核80G</li><li>G5L.21XMEDIUM160： 云桌面-图形G5_42核160G</li><li>G5L.21XLARGE320： 云桌面-图形G5_84核320G</li><li>G6L.8XLARGE96： 云桌面-图形G6_32核96G</li><li>G6L.16XLARGE192： 云桌面-图形G6_64核192G</li><li>G6L.24XLARGE288： 云桌面-图形G6_96核288G</li><li>G6L.32XLARGE384： 云桌面-图形G6_128核384G</li><li>G6L.48XLARGE576： 云桌面-图形G6_192核576G</li><li>G6L.64XLARGE768： 云桌面-图形G6_256核768G</li><li>G6L.96XLARGE1152： 云桌面-图形G6_384核1152G</li><li>G6L.96XLARGE1536： 云桌面-图形G6_384核1536G</li><li>G6L.192XLARGE2304： 云桌面-图形G6_768核2304G</li><li>G6Ls.8XLARGE96： 云桌面-图形G6s_32核96G</li><li>G6Ls.16XLARGE192： 云桌面-图形G6s_64核192G</li><li>G6Ls.24XLARGE288： 云桌面-图形G6s_96核288G</li><li>G6Ls.32XLARGE384： 云桌面-图形G6s_128核384G</li><li>G6Ls.48XLARGE576： 云桌面-图形G6s_192核576G</li><li>G6Ls.64XLARGE768： 云桌面-图形G6s_256核768G</li><li>G6Ls.96XLARGE1152： 云桌面-图形G6s_384核1152G</li><li>G6Ls.96XLARGE1536： 云桌面-图形G6s_384核1536G</li><li>G6Ls.192XLARGE2304： 云桌面-图形G6s_768核2304G</li><li>G8L.8XLARGE96： 云桌面-图形G8_32核96G</li><li>G8L.12XLARGE192： 云桌面-图形G8_48核192G</li><li>G8L.16XLARGE192： 云桌面-图形G8_64核192G</li><li>G8L.24XLARGE384： 云桌面-图形G8_96核384G</li><li>G8L.32XLARGE384： 云桌面-图形G8_128核384G</li><li>G8L.48XLARGE768： 云桌面-图形G8_192核768G</li><li>G8L.64XLARGE768： 云桌面-图形G8_256核768G</li><li>G8L.96XLARGE1536： 云桌面-图形G8_384核1536G</li><li>G9L.12XLARGE192： 云桌面-图形G9_48核192G</li><li>G9L.24XLARGE384： 云桌面-图形G9_96核384G</li><li>G9L.48XLARGE768： 云桌面-图形G9_192核768G</li><li>G9L.96XLARGE1536： 云桌面-图形G9_384核1536G</li></ul>
     */
    public $InstanceType;

    /**
     * @var Disk <p>系统盘信息</p>
     */
    public $SystemDisk;

    /**
     * @var string <p>镜像ID</p>
     */
    public $ImageId;

    /**
     * @var VirtualPrivateCloud <p>私有网络相关信息配置。通过该参数可以指定私有网络的ID，子网ID等信息。</p>
     */
    public $VirtualPrivateCloud;

    /**
     * @var string <p>实例显示名称。</p><li> 如果该字段为空，则采用默认格式：云桌面型号+月日+三位随机数+镜像ID。</li><li> 购买多台实例，如果指定模式串{R:x}，表示生成数字[x, x+n-1]，其中n表示购买实例的数量，例如server_{R:3}，购买1台时，实例显示名称为server_3；购买2台时，实例显示名称分别为server_3，server_4。支持指定多个模式串{R:x}。</li><li> 购买多台实例，如果不指定模式串，则在实例显示名称添加后缀1、2...n，其中n表示购买实例的数量，例如server_，购买2台时，实例显示名称分别为server_1，server_2。</li><li> 最多支持60个字符（包含模式串）。</li>
     */
    public $InstanceName;

    /**
     * @var integer <p>购买实例数量。取值范围[1,50]。默认为1</p>
     */
    public $InstanceCount;

    /**
     * @var array <p>数据盘信息。目前只支持一块数据盘。</p>
     */
    public $DataDisks;

    /**
     * @var string <p>实例计费类型。</p><li> PREPAID：预付费，即包年包月</li><li> POSTPAID_BY_HOUR：按小时后付费</li>默认为PREPAID
     */
    public $ChargeType;

    /**
     * @var ChargePrepaid <p>预付费模式，即包年包月相关参数设置。通过该参数可以指定包年包月实例的购买时长、是否设置自动续费等属性。若指定实例的付费模式为预付费则该参数必传。</p>
     */
    public $ChargePrepaid;

    /**
     * @var boolean <p>是否只预检此次请求。</p><li> true：发送检查请求，不会创建实例。检查项包括是否填写了必需参数，请求格式，业务限制和库存。如果检查通过，则返回的错误码为DryRunOperation；如果返回其他错误码表示检查没有通过；</li><li> false（默认）：发送正常请求，通过检查后直接创建实例</li>
     */
    public $DryRun;

    /**
     * @var boolean <p>允许绑定用户前的匿名访问。默认值：false。</p>
     */
    public $AnonymousAccess;

    /**
     * @var array <p>关联的安全组ID列表</p>
     */
    public $SecurityGroups;

    /**
     * @var string <p>桌面池ID</p>
     */
    public $PoolId;

    /**
     * @var array <p>域名管控策略ID</p>
     */
    public $DomainControlPolicies;

    /**
     * @var array <p>标签，最多10个</p>
     */
    public $Tags;

    /**
     * @var string <p>可用区</p>
     */
    public $Zone;

    /**
     * @param string $InstanceType <p>实例类型。<li>  S3L.MEDIUM4: 云桌面-标准S3_2核4G </li><li> S3L.LARGE8: 云桌面-标准S3_4核8G </li><li> S3L.LARGE16: 云桌面-标准S3_4核16G </li><li> S3L.2XLARGE16: 云桌面-标准S3_8核16G </li><li> S1L.LARGE8：云桌面-标准S1_4核8G </li><li> S1L.LARGE16：标准S1_4核16G </li><li> S2L.2XLARGE16：标准S2_8核16G </li><li> G1L.LARGE16：图形G1_4核16G  </li><li> G1L.2XLARGE32：图形G1_8核32G </li><li> G1L.4XLARGE64：图形G1_16核64G </li><li> G2L.LARGE24: 云桌面-图形G2_6核24G </li><li> G2L.3XLARGE58: 云桌面-图形G2_14核58G </li><li> G2L.3XLARGE44: 云桌面-图形G2_12核44G </li><li> G3L.LARGE16: 云桌面-图形G3_4核16G </li><li> G3L.5XMEDIUM40: 云桌面-图形G3_10核40G </li><li> G3L.5XLARGE80: 云桌面-图形G3_20核80G </li><li> G4L.5XMEDIUM40: 云桌面-图形G4_10核40G </li><li> G4L.11XMEDIUM80: 云桌面-图形G4_22核80G </li><li> G4L.11XLARGE160: 云桌面-图形G4_44核160G </li><li> G5L.5XMEDIUM40: 云桌面-图形G5_10核40G </li><li> G5L.5XLARGE80: 云桌面-图形G5_22核80G </li><li> G5L.21XMEDIUM160: 云桌面-图形G5_42核160G </li><li> G5L.21XLARGE320: 云桌面-图形G5_84核320G </li><li> G6L.8XLARGE96: 云桌面-图形G6_32核96G </li></p><li> G6L.16XLARGE192: 云桌面-图形G6_64核192G </li><li> G6L.24XLARGE288: 云桌面-图形G6_96核288G </li><li> G6L.32XLARGE384: 云桌面-图形G6_128核384G </li><li> G6L.48XLARGE576: 云桌面-图形G6_192核576G </li><li> G6L.64XLARGE768: 云桌面-图形G6_256核768G </li><li> G6L.96XLARGE1152: 云桌面-图形G6_384核1152G </li><li> G6L.96XLARGE1536: 云桌面-图形G6_384核1536G </li><li> G6L.192XLARGE2304: 云桌面-图形G6_768核2304G </li><li> G6Ls.8XLARGE96: 云桌面-图形G6s_32核96G </li><li> G6Ls.16XLARGE192: 云桌面-图形G6s_64核192G </li><li> G6Ls.24XLARGE288: 云桌面-图形G6s_96核288G </li><li> G6Ls.32XLARGE384: 云桌面-图形G6s_128核384G </li><li> G6Ls.48XLARGE576: 云桌面-图形G6s_192核576G </li><li> G6Ls.64XLARGE768: 云桌面-图形G6s_256核768G </li><li> G6Ls.96XLARGE1152: 云桌面-图形G6s_384核1152G </li><li> G6Ls.96XLARGE1536: 云桌面-图形G6s_384核1536G </li><li> G6Ls.192XLARGE2304: 云桌面-图形G6s_768核2304G </li><li> G8L.8XLARGE96: 云桌面-图形G8_32核96G </li><li> G8L.12XLARGE192: 云桌面-图形G8_48核192G </li><li> G8L.16XLARGE192: 云桌面-图形G8_64核192G </li><li> G8L.24XLARGE384: 云桌面-图形G8_96核384G </li><li> G8L.32XLARGE384: 云桌面-图形G8_128核384G </li><li> G8L.48XLARGE768: 云桌面-图形G8_192核768G </li><li> G8L.64XLARGE768: 云桌面-图形G8_256核768G </li><li> G8L.96XLARGE1536: 云桌面-图形G8_384核1536G </li><li> G9L.12XLARGE192: 云桌面-图形G9_48核192G </li><li> G9L.24XLARGE384: 云桌面-图形G9_96核384G </li><li> G9L.48XLARGE768: 云桌面-图形G9_192核768G </li><li> G9L.96XLARGE1536: 云桌面-图形G9_384核1536G </li><p>枚举值：</p><ul><li>S3L.MEDIUM4： 云桌面-标准S3_2核4G</li><li>S3L.LARGE8： 云桌面-标准S3_4核8G</li><li>S3L.LARGE16： 云桌面-标准S3_4核16G</li><li>S3L.2XLARGE16： 云桌面-标准S3_8核16G</li><li>S1L.LARGE8： 云桌面-标准S1_4核8G</li><li>S1L.LARGE16： 标准S1_4核16G</li><li>S2L.2XLARGE16： 标准S2_8核16G</li><li>G1L.LARGE16： 图形G1_4核16G</li><li>G1L.2XLARGE32： 图形G1_8核32G</li><li>G1L.4XLARGE64： 图形G1_16核64G</li><li>G2L.LARGE24： 云桌面-图形G2_6核24G</li><li>G2L.3XLARGE58： 云桌面-图形G2_14核58G</li><li>G2L.3XLARGE44： 云桌面-图形G2_12核44G</li><li>G3L.LARGE16： 云桌面-图形G3_4核16G</li><li>G3L.5XMEDIUM40： 云桌面-图形G3_10核40G</li><li>G3L.5XLARGE80： 云桌面-图形G3_20核80G</li><li>G4L.5XMEDIUM40： 云桌面-图形G4_10核40G</li><li>G4L.11XMEDIUM80： 云桌面-图形G4_22核80G</li><li>G4L.11XLARGE160： 云桌面-图形G4_44核160G</li><li>G5L.5XMEDIUM40： 云桌面-图形G5_10核40G</li><li>G5L.5XLARGE80： 云桌面-图形G5_22核80G</li><li>G5L.21XMEDIUM160： 云桌面-图形G5_42核160G</li><li>G5L.21XLARGE320： 云桌面-图形G5_84核320G</li><li>G6L.8XLARGE96： 云桌面-图形G6_32核96G</li><li>G6L.16XLARGE192： 云桌面-图形G6_64核192G</li><li>G6L.24XLARGE288： 云桌面-图形G6_96核288G</li><li>G6L.32XLARGE384： 云桌面-图形G6_128核384G</li><li>G6L.48XLARGE576： 云桌面-图形G6_192核576G</li><li>G6L.64XLARGE768： 云桌面-图形G6_256核768G</li><li>G6L.96XLARGE1152： 云桌面-图形G6_384核1152G</li><li>G6L.96XLARGE1536： 云桌面-图形G6_384核1536G</li><li>G6L.192XLARGE2304： 云桌面-图形G6_768核2304G</li><li>G6Ls.8XLARGE96： 云桌面-图形G6s_32核96G</li><li>G6Ls.16XLARGE192： 云桌面-图形G6s_64核192G</li><li>G6Ls.24XLARGE288： 云桌面-图形G6s_96核288G</li><li>G6Ls.32XLARGE384： 云桌面-图形G6s_128核384G</li><li>G6Ls.48XLARGE576： 云桌面-图形G6s_192核576G</li><li>G6Ls.64XLARGE768： 云桌面-图形G6s_256核768G</li><li>G6Ls.96XLARGE1152： 云桌面-图形G6s_384核1152G</li><li>G6Ls.96XLARGE1536： 云桌面-图形G6s_384核1536G</li><li>G6Ls.192XLARGE2304： 云桌面-图形G6s_768核2304G</li><li>G8L.8XLARGE96： 云桌面-图形G8_32核96G</li><li>G8L.12XLARGE192： 云桌面-图形G8_48核192G</li><li>G8L.16XLARGE192： 云桌面-图形G8_64核192G</li><li>G8L.24XLARGE384： 云桌面-图形G8_96核384G</li><li>G8L.32XLARGE384： 云桌面-图形G8_128核384G</li><li>G8L.48XLARGE768： 云桌面-图形G8_192核768G</li><li>G8L.64XLARGE768： 云桌面-图形G8_256核768G</li><li>G8L.96XLARGE1536： 云桌面-图形G8_384核1536G</li><li>G9L.12XLARGE192： 云桌面-图形G9_48核192G</li><li>G9L.24XLARGE384： 云桌面-图形G9_96核384G</li><li>G9L.48XLARGE768： 云桌面-图形G9_192核768G</li><li>G9L.96XLARGE1536： 云桌面-图形G9_384核1536G</li></ul>
     * @param Disk $SystemDisk <p>系统盘信息</p>
     * @param string $ImageId <p>镜像ID</p>
     * @param VirtualPrivateCloud $VirtualPrivateCloud <p>私有网络相关信息配置。通过该参数可以指定私有网络的ID，子网ID等信息。</p>
     * @param string $InstanceName <p>实例显示名称。</p><li> 如果该字段为空，则采用默认格式：云桌面型号+月日+三位随机数+镜像ID。</li><li> 购买多台实例，如果指定模式串{R:x}，表示生成数字[x, x+n-1]，其中n表示购买实例的数量，例如server_{R:3}，购买1台时，实例显示名称为server_3；购买2台时，实例显示名称分别为server_3，server_4。支持指定多个模式串{R:x}。</li><li> 购买多台实例，如果不指定模式串，则在实例显示名称添加后缀1、2...n，其中n表示购买实例的数量，例如server_，购买2台时，实例显示名称分别为server_1，server_2。</li><li> 最多支持60个字符（包含模式串）。</li>
     * @param integer $InstanceCount <p>购买实例数量。取值范围[1,50]。默认为1</p>
     * @param array $DataDisks <p>数据盘信息。目前只支持一块数据盘。</p>
     * @param string $ChargeType <p>实例计费类型。</p><li> PREPAID：预付费，即包年包月</li><li> POSTPAID_BY_HOUR：按小时后付费</li>默认为PREPAID
     * @param ChargePrepaid $ChargePrepaid <p>预付费模式，即包年包月相关参数设置。通过该参数可以指定包年包月实例的购买时长、是否设置自动续费等属性。若指定实例的付费模式为预付费则该参数必传。</p>
     * @param boolean $DryRun <p>是否只预检此次请求。</p><li> true：发送检查请求，不会创建实例。检查项包括是否填写了必需参数，请求格式，业务限制和库存。如果检查通过，则返回的错误码为DryRunOperation；如果返回其他错误码表示检查没有通过；</li><li> false（默认）：发送正常请求，通过检查后直接创建实例</li>
     * @param boolean $AnonymousAccess <p>允许绑定用户前的匿名访问。默认值：false。</p>
     * @param array $SecurityGroups <p>关联的安全组ID列表</p>
     * @param string $PoolId <p>桌面池ID</p>
     * @param array $DomainControlPolicies <p>域名管控策略ID</p>
     * @param array $Tags <p>标签，最多10个</p>
     * @param string $Zone <p>可用区</p>
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
        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("SystemDisk",$param) and $param["SystemDisk"] !== null) {
            $this->SystemDisk = new Disk();
            $this->SystemDisk->deserialize($param["SystemDisk"]);
        }

        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("VirtualPrivateCloud",$param) and $param["VirtualPrivateCloud"] !== null) {
            $this->VirtualPrivateCloud = new VirtualPrivateCloud();
            $this->VirtualPrivateCloud->deserialize($param["VirtualPrivateCloud"]);
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("InstanceCount",$param) and $param["InstanceCount"] !== null) {
            $this->InstanceCount = $param["InstanceCount"];
        }

        if (array_key_exists("DataDisks",$param) and $param["DataDisks"] !== null) {
            $this->DataDisks = [];
            foreach ($param["DataDisks"] as $key => $value){
                $obj = new Disk();
                $obj->deserialize($value);
                array_push($this->DataDisks, $obj);
            }
        }

        if (array_key_exists("ChargeType",$param) and $param["ChargeType"] !== null) {
            $this->ChargeType = $param["ChargeType"];
        }

        if (array_key_exists("ChargePrepaid",$param) and $param["ChargePrepaid"] !== null) {
            $this->ChargePrepaid = new ChargePrepaid();
            $this->ChargePrepaid->deserialize($param["ChargePrepaid"]);
        }

        if (array_key_exists("DryRun",$param) and $param["DryRun"] !== null) {
            $this->DryRun = $param["DryRun"];
        }

        if (array_key_exists("AnonymousAccess",$param) and $param["AnonymousAccess"] !== null) {
            $this->AnonymousAccess = $param["AnonymousAccess"];
        }

        if (array_key_exists("SecurityGroups",$param) and $param["SecurityGroups"] !== null) {
            $this->SecurityGroups = $param["SecurityGroups"];
        }

        if (array_key_exists("PoolId",$param) and $param["PoolId"] !== null) {
            $this->PoolId = $param["PoolId"];
        }

        if (array_key_exists("DomainControlPolicies",$param) and $param["DomainControlPolicies"] !== null) {
            $this->DomainControlPolicies = $param["DomainControlPolicies"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }
    }
}
