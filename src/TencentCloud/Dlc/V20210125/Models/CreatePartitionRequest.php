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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreatePartition请求参数结构体
 *
 * @method string getActionType() 获取<p>交易类型：purchase-新购，renew-续费，modify-变配</p>
 * @method void setActionType(string $ActionType) 设置<p>交易类型：purchase-新购，renew-续费，modify-变配</p>
 * @method integer getPayMode() 获取<p>付费模式：0-后付费，1-预付费</p>
 * @method void setPayMode(integer $PayMode) 设置<p>付费模式：0-后付费，1-预付费</p>
 * @method array getResourceQuotaList() 获取<p>资源配额列表（计费项+数量）</p>
 * @method void setResourceQuotaList(array $ResourceQuotaList) 设置<p>资源配额列表（计费项+数量）</p>
 * @method integer getTimeSpan() 获取<p>时间大小，预付费时为购买月数，后付费时为3600</p>
 * @method void setTimeSpan(integer $TimeSpan) 设置<p>时间大小，预付费时为购买月数，后付费时为3600</p>
 * @method string getTimeUnit() 获取<p>时间单位，预付费为m（月），后付费为s（秒）</p>
 * @method void setTimeUnit(string $TimeUnit) 设置<p>时间单位，预付费为m（月），后付费为s（秒）</p>
 * @method integer getAutoRenewFlag() 获取<p>自动续费标志：0-默认，1-自动续费，2-不自动续费（仅预付费有效）</p>
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置<p>自动续费标志：0-默认，1-自动续费，2-不自动续费（仅预付费有效）</p>
 * @method string getName() 获取<p>弹性资源池名称，用于订单页展示</p>
 * @method void setName(string $Name) 设置<p>弹性资源池名称，用于订单页展示</p>
 * @method string getDescription() 获取<p>队列描述</p>
 * @method void setDescription(string $Description) 设置<p>队列描述</p>
 */
class CreatePartitionRequest extends AbstractModel
{
    /**
     * @var string <p>交易类型：purchase-新购，renew-续费，modify-变配</p>
     */
    public $ActionType;

    /**
     * @var integer <p>付费模式：0-后付费，1-预付费</p>
     */
    public $PayMode;

    /**
     * @var array <p>资源配额列表（计费项+数量）</p>
     */
    public $ResourceQuotaList;

    /**
     * @var integer <p>时间大小，预付费时为购买月数，后付费时为3600</p>
     */
    public $TimeSpan;

    /**
     * @var string <p>时间单位，预付费为m（月），后付费为s（秒）</p>
     */
    public $TimeUnit;

    /**
     * @var integer <p>自动续费标志：0-默认，1-自动续费，2-不自动续费（仅预付费有效）</p>
     */
    public $AutoRenewFlag;

    /**
     * @var string <p>弹性资源池名称，用于订单页展示</p>
     */
    public $Name;

    /**
     * @var string <p>队列描述</p>
     */
    public $Description;

    /**
     * @param string $ActionType <p>交易类型：purchase-新购，renew-续费，modify-变配</p>
     * @param integer $PayMode <p>付费模式：0-后付费，1-预付费</p>
     * @param array $ResourceQuotaList <p>资源配额列表（计费项+数量）</p>
     * @param integer $TimeSpan <p>时间大小，预付费时为购买月数，后付费时为3600</p>
     * @param string $TimeUnit <p>时间单位，预付费为m（月），后付费为s（秒）</p>
     * @param integer $AutoRenewFlag <p>自动续费标志：0-默认，1-自动续费，2-不自动续费（仅预付费有效）</p>
     * @param string $Name <p>弹性资源池名称，用于订单页展示</p>
     * @param string $Description <p>队列描述</p>
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
        if (array_key_exists("ActionType",$param) and $param["ActionType"] !== null) {
            $this->ActionType = $param["ActionType"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("ResourceQuotaList",$param) and $param["ResourceQuotaList"] !== null) {
            $this->ResourceQuotaList = [];
            foreach ($param["ResourceQuotaList"] as $key => $value){
                $obj = new ResourceQuota();
                $obj->deserialize($value);
                array_push($this->ResourceQuotaList, $obj);
            }
        }

        if (array_key_exists("TimeSpan",$param) and $param["TimeSpan"] !== null) {
            $this->TimeSpan = $param["TimeSpan"];
        }

        if (array_key_exists("TimeUnit",$param) and $param["TimeUnit"] !== null) {
            $this->TimeUnit = $param["TimeUnit"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
