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
 * DescribeDetectPackageDetail返回参数结构体
 *
 * @method string getResourceId() 获取资源id
 * @method void setResourceId(string $ResourceId) 设置资源id
 * @method string getResourceType() 获取资源类型 TASK 探测任务
 * @method void setResourceType(string $ResourceType) 设置资源类型 TASK 探测任务
 * @method integer getQuota() 获取额度
 * @method void setQuota(integer $Quota) 设置额度
 * @method string getCurrentDeadline() 获取过期时间
 * @method void setCurrentDeadline(string $CurrentDeadline) 设置过期时间
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method integer getIsExpire() 获取是否过期
 * @method void setIsExpire(integer $IsExpire) 设置是否过期
 * @method string getStatus() 获取状态 ENABLED: 正常 ISOLATED: 隔离 DESTROYED：销毁 REFUNDED：已退款
 * @method void setStatus(string $Status) 设置状态 ENABLED: 正常 ISOLATED: 隔离 DESTROYED：销毁 REFUNDED：已退款
 * @method integer getAutoRenewFlag() 获取是否自动续费：0否1是
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置是否自动续费：0否1是
 * @method string getRemark() 获取备注
 * @method void setRemark(string $Remark) 设置备注
 * @method array getCostItemList() 获取计费项
 * @method void setCostItemList(array $CostItemList) 设置计费项
 * @method integer getUsedNum() 获取使用数量
 * @method void setUsedNum(integer $UsedNum) 设置使用数量
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeDetectPackageDetailResponse extends AbstractModel
{
    /**
     * @var string 资源id
     */
    public $ResourceId;

    /**
     * @var string 资源类型 TASK 探测任务
     */
    public $ResourceType;

    /**
     * @var integer 额度
     */
    public $Quota;

    /**
     * @var string 过期时间
     */
    public $CurrentDeadline;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var integer 是否过期
     */
    public $IsExpire;

    /**
     * @var string 状态 ENABLED: 正常 ISOLATED: 隔离 DESTROYED：销毁 REFUNDED：已退款
     */
    public $Status;

    /**
     * @var integer 是否自动续费：0否1是
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
     * @var integer 使用数量
     */
    public $UsedNum;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $ResourceId 资源id
     * @param string $ResourceType 资源类型 TASK 探测任务
     * @param integer $Quota 额度
     * @param string $CurrentDeadline 过期时间
     * @param string $CreateTime 创建时间
     * @param integer $IsExpire 是否过期
     * @param string $Status 状态 ENABLED: 正常 ISOLATED: 隔离 DESTROYED：销毁 REFUNDED：已退款
     * @param integer $AutoRenewFlag 是否自动续费：0否1是
     * @param string $Remark 备注
     * @param array $CostItemList 计费项
     * @param integer $UsedNum 使用数量
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("Quota",$param) and $param["Quota"] !== null) {
            $this->Quota = $param["Quota"];
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

        if (array_key_exists("UsedNum",$param) and $param["UsedNum"] !== null) {
            $this->UsedNum = $param["UsedNum"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
