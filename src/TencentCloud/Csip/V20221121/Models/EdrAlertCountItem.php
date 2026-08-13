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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * EDR告警数量统计项
 *
 * @method string getInstanceId() 获取<p>查询实例ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>查询实例ID</p>
 * @method integer getTotalCount() 获取<p>总告警条数</p>
 * @method void setTotalCount(integer $TotalCount) 设置<p>总告警条数</p>
 * @method integer getVirusTrojanCount() 获取<p>病毒木马（VIRUS_TROJAN）数量</p>
 * @method void setVirusTrojanCount(integer $VirusTrojanCount) 设置<p>病毒木马（VIRUS_TROJAN）数量</p>
 * @method integer getAbnormalLoginCount() 获取<p>异常登录（ABNORMAL_LOGIN）数量</p>
 * @method void setAbnormalLoginCount(integer $AbnormalLoginCount) 设置<p>异常登录（ABNORMAL_LOGIN）数量</p>
 * @method integer getHostBehaviorCount() 获取<p>主机行为（HOST_BEHAVIOR）数量</p>
 * @method void setHostBehaviorCount(integer $HostBehaviorCount) 设置<p>主机行为（HOST_BEHAVIOR）数量</p>
 * @method integer getNetworkBehaviorCount() 获取<p>网络行为（NETWORK_BEHAVIOR）数量</p>
 * @method void setNetworkBehaviorCount(integer $NetworkBehaviorCount) 设置<p>网络行为（NETWORK_BEHAVIOR）数量</p>
 * @method integer getInstancesCount() 获取<p>存在告警的主机数量（仅 GlobalCount 模式有值）</p>
 * @method void setInstancesCount(integer $InstancesCount) 设置<p>存在告警的主机数量（仅 GlobalCount 模式有值）</p>
 */
class EdrAlertCountItem extends AbstractModel
{
    /**
     * @var string <p>查询实例ID</p>
     */
    public $InstanceId;

    /**
     * @var integer <p>总告警条数</p>
     */
    public $TotalCount;

    /**
     * @var integer <p>病毒木马（VIRUS_TROJAN）数量</p>
     */
    public $VirusTrojanCount;

    /**
     * @var integer <p>异常登录（ABNORMAL_LOGIN）数量</p>
     */
    public $AbnormalLoginCount;

    /**
     * @var integer <p>主机行为（HOST_BEHAVIOR）数量</p>
     */
    public $HostBehaviorCount;

    /**
     * @var integer <p>网络行为（NETWORK_BEHAVIOR）数量</p>
     */
    public $NetworkBehaviorCount;

    /**
     * @var integer <p>存在告警的主机数量（仅 GlobalCount 模式有值）</p>
     */
    public $InstancesCount;

    /**
     * @param string $InstanceId <p>查询实例ID</p>
     * @param integer $TotalCount <p>总告警条数</p>
     * @param integer $VirusTrojanCount <p>病毒木马（VIRUS_TROJAN）数量</p>
     * @param integer $AbnormalLoginCount <p>异常登录（ABNORMAL_LOGIN）数量</p>
     * @param integer $HostBehaviorCount <p>主机行为（HOST_BEHAVIOR）数量</p>
     * @param integer $NetworkBehaviorCount <p>网络行为（NETWORK_BEHAVIOR）数量</p>
     * @param integer $InstancesCount <p>存在告警的主机数量（仅 GlobalCount 模式有值）</p>
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("VirusTrojanCount",$param) and $param["VirusTrojanCount"] !== null) {
            $this->VirusTrojanCount = $param["VirusTrojanCount"];
        }

        if (array_key_exists("AbnormalLoginCount",$param) and $param["AbnormalLoginCount"] !== null) {
            $this->AbnormalLoginCount = $param["AbnormalLoginCount"];
        }

        if (array_key_exists("HostBehaviorCount",$param) and $param["HostBehaviorCount"] !== null) {
            $this->HostBehaviorCount = $param["HostBehaviorCount"];
        }

        if (array_key_exists("NetworkBehaviorCount",$param) and $param["NetworkBehaviorCount"] !== null) {
            $this->NetworkBehaviorCount = $param["NetworkBehaviorCount"];
        }

        if (array_key_exists("InstancesCount",$param) and $param["InstancesCount"] !== null) {
            $this->InstancesCount = $param["InstancesCount"];
        }
    }
}
