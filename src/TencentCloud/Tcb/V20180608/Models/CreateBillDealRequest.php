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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateBillDeal请求参数结构体
 *
 * @method string getDealType() 获取当前下单的操作类型，可取[purchase,renew,modify]三种值，分别代表新购，续费，变配。
 * @method void setDealType(string $DealType) 设置当前下单的操作类型，可取[purchase,renew,modify]三种值，分别代表新购，续费，变配。
 * @method string getProductType() 获取购买的产品类型，可取[tcb-baas,tcb-promotion,tcb-package], 分别代表baas套餐、大促包、资源包
 * @method void setProductType(string $ProductType) 设置购买的产品类型，可取[tcb-baas,tcb-promotion,tcb-package], 分别代表baas套餐、大促包、资源包
 * @method string getPackageId() 获取目标下单产品/套餐Id。
对于云开发环境套餐，可通过 DescribeBaasPackageList 接口获取，对应其出参的PackageName
 * @method void setPackageId(string $PackageId) 设置目标下单产品/套餐Id。
对于云开发环境套餐，可通过 DescribeBaasPackageList 接口获取，对应其出参的PackageName
 * @method boolean getCreateAndPay() 获取默认只下单不支付，为ture则下单并支付。
如果需要下单并支付，请确保账户下有足够的余额，否则会导致下单失败。
 * @method void setCreateAndPay(boolean $CreateAndPay) 设置默认只下单不支付，为ture则下单并支付。
如果需要下单并支付，请确保账户下有足够的余额，否则会导致下单失败。
 * @method integer getTimeSpan() 获取购买时长，与TimeUnit字段搭配使用。
 * @method void setTimeSpan(integer $TimeSpan) 设置购买时长，与TimeUnit字段搭配使用。
 * @method string getTimeUnit() 获取购买时长单位,按各产品规则可选d(天),m(月),y(年),p(一次性)。
对于 云开发环境的 新购和续费，目前仅支持 按月购买（即 TimeUnit=m）。
 * @method void setTimeUnit(string $TimeUnit) 设置购买时长单位,按各产品规则可选d(天),m(月),y(年),p(一次性)。
对于 云开发环境的 新购和续费，目前仅支持 按月购买（即 TimeUnit=m）。
 * @method string getResourceId() 获取资源唯一标识。
在云开发环境 续费和变配 场景下必传，取值为环境ID。
 * @method void setResourceId(string $ResourceId) 设置资源唯一标识。
在云开发环境 续费和变配 场景下必传，取值为环境ID。
 * @method string getSource() 获取来源可选[qcloud,miniapp]，默认qcloud。
miniapp表示微信云开发，主要适用于[小程序云开发](https://developers.weixin.qq.com/miniprogram/dev/wxcloudservice/wxcloud/billing/price.html)。

 * @method void setSource(string $Source) 设置来源可选[qcloud,miniapp]，默认qcloud。
miniapp表示微信云开发，主要适用于[小程序云开发](https://developers.weixin.qq.com/miniprogram/dev/wxcloudservice/wxcloud/billing/price.html)。

 * @method string getAlias() 获取环境别名，用于新购云开发环境时，给云开发环境起别名。
仅当 新购云开发环境（DealType=purchase 并且 ProductType=tcb-baas ）时有效。

### 格式要求
- 可选字符： 小写字母(a~z)、数字、减号(-)
- 不能以 减号(-) 开头或结尾
- 不能有连个连续的 减号(-)
- 长度不超过20位
 * @method void setAlias(string $Alias) 设置环境别名，用于新购云开发环境时，给云开发环境起别名。
仅当 新购云开发环境（DealType=purchase 并且 ProductType=tcb-baas ）时有效。

### 格式要求
- 可选字符： 小写字母(a~z)、数字、减号(-)
- 不能以 减号(-) 开头或结尾
- 不能有连个连续的 减号(-)
- 长度不超过20位
 * @method string getEnvId() 获取环境id，当购买资源包和大促包时（ProductType取值为tcb-promotion 或 tcb-package）必传，表示资源包在哪个环境下生效。
 * @method void setEnvId(string $EnvId) 设置环境id，当购买资源包和大促包时（ProductType取值为tcb-promotion 或 tcb-package）必传，表示资源包在哪个环境下生效。
 * @method boolean getEnableExcess() 获取开启超限按量。
开启后，当 套餐内的资源点 和 资源包 都用尽后，会自动按量计费。
详见 [计费说明](https://cloud.tencent.com/document/product/876/127357)。
 * @method void setEnableExcess(boolean $EnableExcess) 设置开启超限按量。
开启后，当 套餐内的资源点 和 资源包 都用尽后，会自动按量计费。
详见 [计费说明](https://cloud.tencent.com/document/product/876/127357)。
 * @method string getModifyPackageId() 获取变配目标套餐id，对于云开发环境变配场景下必传。
对于云开发环境套餐，可通过 DescribeBaasPackageList 接口获取，对应其出参的PackageName
 * @method void setModifyPackageId(string $ModifyPackageId) 设置变配目标套餐id，对于云开发环境变配场景下必传。
对于云开发环境套餐，可通过 DescribeBaasPackageList 接口获取，对应其出参的PackageName
 * @method string getExtension() 获取jsonstr附加信息
 * @method void setExtension(string $Extension) 设置jsonstr附加信息
 * @method boolean getAutoVoucher() 获取是否自动选择代金券支付。
 * @method void setAutoVoucher(boolean $AutoVoucher) 设置是否自动选择代金券支付。
 * @method array getResourceTypes() 获取资源类型。
代表新购环境（DealType=purchase 并且 ProductType=tcb-baas ）时需要发货哪些资源。
可取值：flexdb, cos, cdn, scf

 * @method void setResourceTypes(array $ResourceTypes) 设置资源类型。
代表新购环境（DealType=purchase 并且 ProductType=tcb-baas ）时需要发货哪些资源。
可取值：flexdb, cos, cdn, scf

 * @method array getEnvTags() 获取环境标签。
 代表新购环境（DealType=purchase 并且 ProductType=tcb-baas ）时需要打的标签。

 * @method void setEnvTags(array $EnvTags) 设置环境标签。
 代表新购环境（DealType=purchase 并且 ProductType=tcb-baas ）时需要打的标签。
 */
class CreateBillDealRequest extends AbstractModel
{
    /**
     * @var string 当前下单的操作类型，可取[purchase,renew,modify]三种值，分别代表新购，续费，变配。
     */
    public $DealType;

    /**
     * @var string 购买的产品类型，可取[tcb-baas,tcb-promotion,tcb-package], 分别代表baas套餐、大促包、资源包
     */
    public $ProductType;

    /**
     * @var string 目标下单产品/套餐Id。
对于云开发环境套餐，可通过 DescribeBaasPackageList 接口获取，对应其出参的PackageName
     */
    public $PackageId;

    /**
     * @var boolean 默认只下单不支付，为ture则下单并支付。
如果需要下单并支付，请确保账户下有足够的余额，否则会导致下单失败。
     */
    public $CreateAndPay;

    /**
     * @var integer 购买时长，与TimeUnit字段搭配使用。
     */
    public $TimeSpan;

    /**
     * @var string 购买时长单位,按各产品规则可选d(天),m(月),y(年),p(一次性)。
对于 云开发环境的 新购和续费，目前仅支持 按月购买（即 TimeUnit=m）。
     */
    public $TimeUnit;

    /**
     * @var string 资源唯一标识。
在云开发环境 续费和变配 场景下必传，取值为环境ID。
     */
    public $ResourceId;

    /**
     * @var string 来源可选[qcloud,miniapp]，默认qcloud。
miniapp表示微信云开发，主要适用于[小程序云开发](https://developers.weixin.qq.com/miniprogram/dev/wxcloudservice/wxcloud/billing/price.html)。

     */
    public $Source;

    /**
     * @var string 环境别名，用于新购云开发环境时，给云开发环境起别名。
仅当 新购云开发环境（DealType=purchase 并且 ProductType=tcb-baas ）时有效。

### 格式要求
- 可选字符： 小写字母(a~z)、数字、减号(-)
- 不能以 减号(-) 开头或结尾
- 不能有连个连续的 减号(-)
- 长度不超过20位
     */
    public $Alias;

    /**
     * @var string 环境id，当购买资源包和大促包时（ProductType取值为tcb-promotion 或 tcb-package）必传，表示资源包在哪个环境下生效。
     */
    public $EnvId;

    /**
     * @var boolean 开启超限按量。
开启后，当 套餐内的资源点 和 资源包 都用尽后，会自动按量计费。
详见 [计费说明](https://cloud.tencent.com/document/product/876/127357)。
     */
    public $EnableExcess;

    /**
     * @var string 变配目标套餐id，对于云开发环境变配场景下必传。
对于云开发环境套餐，可通过 DescribeBaasPackageList 接口获取，对应其出参的PackageName
     */
    public $ModifyPackageId;

    /**
     * @var string jsonstr附加信息
     */
    public $Extension;

    /**
     * @var boolean 是否自动选择代金券支付。
     */
    public $AutoVoucher;

    /**
     * @var array 资源类型。
代表新购环境（DealType=purchase 并且 ProductType=tcb-baas ）时需要发货哪些资源。
可取值：flexdb, cos, cdn, scf

     */
    public $ResourceTypes;

    /**
     * @var array 环境标签。
 代表新购环境（DealType=purchase 并且 ProductType=tcb-baas ）时需要打的标签。

     */
    public $EnvTags;

    /**
     * @param string $DealType 当前下单的操作类型，可取[purchase,renew,modify]三种值，分别代表新购，续费，变配。
     * @param string $ProductType 购买的产品类型，可取[tcb-baas,tcb-promotion,tcb-package], 分别代表baas套餐、大促包、资源包
     * @param string $PackageId 目标下单产品/套餐Id。
对于云开发环境套餐，可通过 DescribeBaasPackageList 接口获取，对应其出参的PackageName
     * @param boolean $CreateAndPay 默认只下单不支付，为ture则下单并支付。
如果需要下单并支付，请确保账户下有足够的余额，否则会导致下单失败。
     * @param integer $TimeSpan 购买时长，与TimeUnit字段搭配使用。
     * @param string $TimeUnit 购买时长单位,按各产品规则可选d(天),m(月),y(年),p(一次性)。
对于 云开发环境的 新购和续费，目前仅支持 按月购买（即 TimeUnit=m）。
     * @param string $ResourceId 资源唯一标识。
在云开发环境 续费和变配 场景下必传，取值为环境ID。
     * @param string $Source 来源可选[qcloud,miniapp]，默认qcloud。
miniapp表示微信云开发，主要适用于[小程序云开发](https://developers.weixin.qq.com/miniprogram/dev/wxcloudservice/wxcloud/billing/price.html)。

     * @param string $Alias 环境别名，用于新购云开发环境时，给云开发环境起别名。
仅当 新购云开发环境（DealType=purchase 并且 ProductType=tcb-baas ）时有效。

### 格式要求
- 可选字符： 小写字母(a~z)、数字、减号(-)
- 不能以 减号(-) 开头或结尾
- 不能有连个连续的 减号(-)
- 长度不超过20位
     * @param string $EnvId 环境id，当购买资源包和大促包时（ProductType取值为tcb-promotion 或 tcb-package）必传，表示资源包在哪个环境下生效。
     * @param boolean $EnableExcess 开启超限按量。
开启后，当 套餐内的资源点 和 资源包 都用尽后，会自动按量计费。
详见 [计费说明](https://cloud.tencent.com/document/product/876/127357)。
     * @param string $ModifyPackageId 变配目标套餐id，对于云开发环境变配场景下必传。
对于云开发环境套餐，可通过 DescribeBaasPackageList 接口获取，对应其出参的PackageName
     * @param string $Extension jsonstr附加信息
     * @param boolean $AutoVoucher 是否自动选择代金券支付。
     * @param array $ResourceTypes 资源类型。
代表新购环境（DealType=purchase 并且 ProductType=tcb-baas ）时需要发货哪些资源。
可取值：flexdb, cos, cdn, scf

     * @param array $EnvTags 环境标签。
 代表新购环境（DealType=purchase 并且 ProductType=tcb-baas ）时需要打的标签。
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
        if (array_key_exists("DealType",$param) and $param["DealType"] !== null) {
            $this->DealType = $param["DealType"];
        }

        if (array_key_exists("ProductType",$param) and $param["ProductType"] !== null) {
            $this->ProductType = $param["ProductType"];
        }

        if (array_key_exists("PackageId",$param) and $param["PackageId"] !== null) {
            $this->PackageId = $param["PackageId"];
        }

        if (array_key_exists("CreateAndPay",$param) and $param["CreateAndPay"] !== null) {
            $this->CreateAndPay = $param["CreateAndPay"];
        }

        if (array_key_exists("TimeSpan",$param) and $param["TimeSpan"] !== null) {
            $this->TimeSpan = $param["TimeSpan"];
        }

        if (array_key_exists("TimeUnit",$param) and $param["TimeUnit"] !== null) {
            $this->TimeUnit = $param["TimeUnit"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }

        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }

        if (array_key_exists("EnableExcess",$param) and $param["EnableExcess"] !== null) {
            $this->EnableExcess = $param["EnableExcess"];
        }

        if (array_key_exists("ModifyPackageId",$param) and $param["ModifyPackageId"] !== null) {
            $this->ModifyPackageId = $param["ModifyPackageId"];
        }

        if (array_key_exists("Extension",$param) and $param["Extension"] !== null) {
            $this->Extension = $param["Extension"];
        }

        if (array_key_exists("AutoVoucher",$param) and $param["AutoVoucher"] !== null) {
            $this->AutoVoucher = $param["AutoVoucher"];
        }

        if (array_key_exists("ResourceTypes",$param) and $param["ResourceTypes"] !== null) {
            $this->ResourceTypes = $param["ResourceTypes"];
        }

        if (array_key_exists("EnvTags",$param) and $param["EnvTags"] !== null) {
            $this->EnvTags = [];
            foreach ($param["EnvTags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->EnvTags, $obj);
            }
        }
    }
}
