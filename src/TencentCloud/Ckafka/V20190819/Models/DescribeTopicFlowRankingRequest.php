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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTopicFlowRanking请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getRankingType() 获取排行类别(PRO-Topic生产流量/CON-Topic消费流量)
 * @method void setRankingType(string $RankingType) 设置排行类别(PRO-Topic生产流量/CON-Topic消费流量)
 * @method string getBeginDate() 获取排行起始日期
 * @method void setBeginDate(string $BeginDate) 设置排行起始日期
 * @method string getEndDate() 获取排行结束日期
 * @method void setEndDate(string $EndDate) 设置排行结束日期
 */
class DescribeTopicFlowRankingRequest extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 排行类别(PRO-Topic生产流量/CON-Topic消费流量)
     */
    public $RankingType;

    /**
     * @var string 排行起始日期
     */
    public $BeginDate;

    /**
     * @var string 排行结束日期
     */
    public $EndDate;

    /**
     * @param string $InstanceId 实例ID
     * @param string $RankingType 排行类别(PRO-Topic生产流量/CON-Topic消费流量)
     * @param string $BeginDate 排行起始日期
     * @param string $EndDate 排行结束日期
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

        if (array_key_exists("RankingType",$param) and $param["RankingType"] !== null) {
            $this->RankingType = $param["RankingType"];
        }

        if (array_key_exists("BeginDate",$param) and $param["BeginDate"] !== null) {
            $this->BeginDate = $param["BeginDate"];
        }

        if (array_key_exists("EndDate",$param) and $param["EndDate"] !== null) {
            $this->EndDate = $param["EndDate"];
        }
    }
}
