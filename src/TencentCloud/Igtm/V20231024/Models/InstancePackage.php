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
namespace TencentCloud\Igtm\V20231024\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例套餐
 *
 * @method string getResourceId() 获取实例套餐资源id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceId(string $ResourceId) 设置实例套餐资源id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceId() 获取实例id
 * @method void setInstanceId(string $InstanceId) 设置实例id
 * @method string getInstanceName() 获取实例名
 * @method void setInstanceName(string $InstanceName) 设置实例名
 * @method string getPackageType() 获取套餐类型
FREE: 免费版
STANDARD：标准版
ULTIMATE：旗舰版
 * @method void setPackageType(string $PackageType) 设置套餐类型
FREE: 免费版
STANDARD：标准版
ULTIMATE：旗舰版
 * @method string getCurrentDeadline() 获取套餐过期时间
 * @method void setCurrentDeadline(string $CurrentDeadline) 设置套餐过期时间
 * @method string getCreateTime() 获取套餐创建时间
 * @method void setCreateTime(string $CreateTime) 设置套餐创建时间
 * @method integer getIsExpire() 获取是否过期0否1是
 * @method void setIsExpire(integer $IsExpire) 设置是否过期0否1是
 * @method string getStatus() 获取实例状态
ENABLED: 正常
DISABLED: 禁用
 * @method void setStatus(string $Status) 设置实例状态
ENABLED: 正常
DISABLED: 禁用
 * @method integer getAutoRenewFlag() 获取是否自动续费0不1是
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置是否自动续费0不1是
 * @method string getRemark() 获取备注
 * @method void setRemark(string $Remark) 设置备注
 * @method array getCostItemList() 获取计费项
 * @method void setCostItemList(array $CostItemList) 设置计费项
 * @method integer getMinCheckInterval() 获取最小检查间隔时间s
 * @method void setMinCheckInterval(integer $MinCheckInterval) 设置最小检查间隔时间s
 * @method integer getMinGlobalTtl() 获取最小TTL s
 * @method void setMinGlobalTtl(integer $MinGlobalTtl) 设置最小TTL s
 * @method array getTrafficStrategy() 获取流量策略类型：ALL返回全部，WEIGHT权重
 * @method void setTrafficStrategy(array $TrafficStrategy) 设置流量策略类型：ALL返回全部，WEIGHT权重
 * @method array getScheduleStrategy() 获取策略类型：LOCATION按地理位置调度，DELAY按延迟调度
 * @method void setScheduleStrategy(array $ScheduleStrategy) 设置策略类型：LOCATION按地理位置调度，DELAY按延迟调度
 */
class InstancePackage extends AbstractModel
{
    /**
     * @var string 实例套餐资源id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceId;

    /**
     * @var string 实例id
     */
    public $InstanceId;

    /**
     * @var string 实例名
     */
    public $InstanceName;

    /**
     * @var string 套餐类型
FREE: 免费版
STANDARD：标准版
ULTIMATE：旗舰版
     */
    public $PackageType;

    /**
     * @var string 套餐过期时间
     */
    public $CurrentDeadline;

    /**
     * @var string 套餐创建时间
     */
    public $CreateTime;

    /**
     * @var integer 是否过期0否1是
     */
    public $IsExpire;

    /**
     * @var string 实例状态
ENABLED: 正常
DISABLED: 禁用
     */
    public $Status;

    /**
     * @var integer 是否自动续费0不1是
     */
    public $AutoRenewFlag;

    /**
     * @var string 备注
     */
    public $Remark;

    /**
     * @var array 计费项
     */
    public $CostItemList;

    /**
     * @var integer 最小检查间隔时间s
     */
    public $MinCheckInterval;

    /**
     * @var integer 最小TTL s
     */
    public $MinGlobalTtl;

    /**
     * @var array 流量策略类型：ALL返回全部，WEIGHT权重
     */
    public $TrafficStrategy;

    /**
     * @var array 策略类型：LOCATION按地理位置调度，DELAY按延迟调度
     */
    public $ScheduleStrategy;

    /**
     * @param string $ResourceId 实例套餐资源id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceId 实例id
     * @param string $InstanceName 实例名
     * @param string $PackageType 套餐类型
FREE: 免费版
STANDARD：标准版
ULTIMATE：旗舰版
     * @param string $CurrentDeadline 套餐过期时间
     * @param string $CreateTime 套餐创建时间
     * @param integer $IsExpire 是否过期0否1是
     * @param string $Status 实例状态
ENABLED: 正常
DISABLED: 禁用
     * @param integer $AutoRenewFlag 是否自动续费0不1是
     * @param string $Remark 备注
     * @param array $CostItemList 计费项
     * @param integer $MinCheckInterval 最小检查间隔时间s
     * @param integer $MinGlobalTtl 最小TTL s
     * @param array $TrafficStrategy 流量策略类型：ALL返回全部，WEIGHT权重
     * @param array $ScheduleStrategy 策略类型：LOCATION按地理位置调度，DELAY按延迟调度
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
        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("PackageType",$param) and $param["PackageType"] !== null) {
            $this->PackageType = $param["PackageType"];
        }

        if (array_key_exists("CurrentDeadline",$param) and $param["CurrentDeadline"] !== null) {
            $this->CurrentDeadline = $param["CurrentDeadline"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("IsExpire",$param) and $param["IsExpire"] !== null) {
            $this->IsExpire = $param["IsExpire"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("CostItemList",$param) and $param["CostItemList"] !== null) {
            $this->CostItemList = [];
            foreach ($param["CostItemList"] as $key => $value){
                $obj = new CostItem();
                $obj->deserialize($value);
                array_push($this->CostItemList, $obj);
            }
        }

        if (array_key_exists("MinCheckInterval",$param) and $param["MinCheckInterval"] !== null) {
            $this->MinCheckInterval = $param["MinCheckInterval"];
        }

        if (array_key_exists("MinGlobalTtl",$param) and $param["MinGlobalTtl"] !== null) {
            $this->MinGlobalTtl = $param["MinGlobalTtl"];
        }

        if (array_key_exists("TrafficStrategy",$param) and $param["TrafficStrategy"] !== null) {
            $this->TrafficStrategy = $param["TrafficStrategy"];
        }

        if (array_key_exists("ScheduleStrategy",$param) and $param["ScheduleStrategy"] !== null) {
            $this->ScheduleStrategy = $param["ScheduleStrategy"];
        }
    }
}
