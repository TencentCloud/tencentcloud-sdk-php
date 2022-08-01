<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * DescribeBaasPackageList请求参数结构体
 *
 * @method string getPackageName() 获取tcb产品套餐ID，不填拉取全量package信息。
 * @method void setPackageName(string $PackageName) 设置tcb产品套餐ID，不填拉取全量package信息。
 * @method string getEnvId() 获取环境ID
 * @method void setEnvId(string $EnvId) 设置环境ID
 * @method string getSource() 获取套餐归属方，填写后只返回对应的套餐 包含miniapp与qcloud两种 默认为miniapp
 * @method void setSource(string $Source) 设置套餐归属方，填写后只返回对应的套餐 包含miniapp与qcloud两种 默认为miniapp
 * @method string getEnvChannel() 获取套餐归属环境渠道
 * @method void setEnvChannel(string $EnvChannel) 设置套餐归属环境渠道
 * @method string getTargetAction() 获取拉取套餐用途：
1）new 新购
2）modify变配
3）renew续费
 * @method void setTargetAction(string $TargetAction) 设置拉取套餐用途：
1）new 新购
2）modify变配
3）renew续费
 * @method string getGroupName() 获取预留字段，同一商品会对应多个类型套餐，对指标有不同侧重。
计算型calculation
流量型flux
容量型capactiy
 * @method void setGroupName(string $GroupName) 设置预留字段，同一商品会对应多个类型套餐，对指标有不同侧重。
计算型calculation
流量型flux
容量型capactiy
 * @method array getPackageTypeList() 获取类型分组过滤。默认为["default"]
 * @method void setPackageTypeList(array $PackageTypeList) 设置类型分组过滤。默认为["default"]
 * @method string getPaymentChannel() 获取付费渠道，与回包billTags中的计费参数相关，不填返回默认值。
 * @method void setPaymentChannel(string $PaymentChannel) 设置付费渠道，与回包billTags中的计费参数相关，不填返回默认值。
 */
class DescribeBaasPackageListRequest extends AbstractModel
{
    /**
     * @var string tcb产品套餐ID，不填拉取全量package信息。
     */
    public $PackageName;

    /**
     * @var string 环境ID
     */
    public $EnvId;

    /**
     * @var string 套餐归属方，填写后只返回对应的套餐 包含miniapp与qcloud两种 默认为miniapp
     */
    public $Source;

    /**
     * @var string 套餐归属环境渠道
     */
    public $EnvChannel;

    /**
     * @var string 拉取套餐用途：
1）new 新购
2）modify变配
3）renew续费
     */
    public $TargetAction;

    /**
     * @var string 预留字段，同一商品会对应多个类型套餐，对指标有不同侧重。
计算型calculation
流量型flux
容量型capactiy
     */
    public $GroupName;

    /**
     * @var array 类型分组过滤。默认为["default"]
     */
    public $PackageTypeList;

    /**
     * @var string 付费渠道，与回包billTags中的计费参数相关，不填返回默认值。
     */
    public $PaymentChannel;

    /**
     * @param string $PackageName tcb产品套餐ID，不填拉取全量package信息。
     * @param string $EnvId 环境ID
     * @param string $Source 套餐归属方，填写后只返回对应的套餐 包含miniapp与qcloud两种 默认为miniapp
     * @param string $EnvChannel 套餐归属环境渠道
     * @param string $TargetAction 拉取套餐用途：
1）new 新购
2）modify变配
3）renew续费
     * @param string $GroupName 预留字段，同一商品会对应多个类型套餐，对指标有不同侧重。
计算型calculation
流量型flux
容量型capactiy
     * @param array $PackageTypeList 类型分组过滤。默认为["default"]
     * @param string $PaymentChannel 付费渠道，与回包billTags中的计费参数相关，不填返回默认值。
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
        if (array_key_exists("PackageName",$param) and $param["PackageName"] !== null) {
            $this->PackageName = $param["PackageName"];
        }

        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("EnvChannel",$param) and $param["EnvChannel"] !== null) {
            $this->EnvChannel = $param["EnvChannel"];
        }

        if (array_key_exists("TargetAction",$param) and $param["TargetAction"] !== null) {
            $this->TargetAction = $param["TargetAction"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("PackageTypeList",$param) and $param["PackageTypeList"] !== null) {
            $this->PackageTypeList = $param["PackageTypeList"];
        }

        if (array_key_exists("PaymentChannel",$param) and $param["PaymentChannel"] !== null) {
            $this->PaymentChannel = $param["PaymentChannel"];
        }
    }
}
