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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCLSTopics请求参数结构体
 *
 * @method string getCLSRegion() 获取日志集所属的地域，取值有： <li>ap-guangzhou：广州；</li> <li>ap-beijing：北京；</li> <li>ap-chengdu：成都；</li> <li>ap-chongqing：重庆；</li> <li>ap-nanjing：南京；</li> <li>ap-shanghai：上海；</li> <li>ap-singapore：新加坡。</li>
 * @method void setCLSRegion(string $CLSRegion) 设置日志集所属的地域，取值有： <li>ap-guangzhou：广州；</li> <li>ap-beijing：北京；</li> <li>ap-chengdu：成都；</li> <li>ap-chongqing：重庆；</li> <li>ap-nanjing：南京；</li> <li>ap-shanghai：上海；</li> <li>ap-singapore：新加坡。</li>
 * @method string getLogsetId() 获取日志主题所属日志集 ID。
 * @method void setLogsetId(string $LogsetId) 设置日志主题所属日志集 ID。
 * @method array getTopicIds() 获取日志主题 ID 列表。如果不填，表示查询所有的日志主题。
 * @method void setTopicIds(array $TopicIds) 设置日志主题 ID 列表。如果不填，表示查询所有的日志主题。
 * @method integer getOffset() 获取分页偏移量，默认值：0。
 * @method void setOffset(integer $Offset) 设置分页偏移量，默认值：0。
 * @method integer getLimit() 获取返回记录条数，默认值：20，最大值：100。
 * @method void setLimit(integer $Limit) 设置返回记录条数，默认值：20，最大值：100。
 */
class DescribeCLSTopicsRequest extends AbstractModel
{
    /**
     * @var string 日志集所属的地域，取值有： <li>ap-guangzhou：广州；</li> <li>ap-beijing：北京；</li> <li>ap-chengdu：成都；</li> <li>ap-chongqing：重庆；</li> <li>ap-nanjing：南京；</li> <li>ap-shanghai：上海；</li> <li>ap-singapore：新加坡。</li>
     */
    public $CLSRegion;

    /**
     * @var string 日志主题所属日志集 ID。
     */
    public $LogsetId;

    /**
     * @var array 日志主题 ID 列表。如果不填，表示查询所有的日志主题。
     */
    public $TopicIds;

    /**
     * @var integer 分页偏移量，默认值：0。
     */
    public $Offset;

    /**
     * @var integer 返回记录条数，默认值：20，最大值：100。
     */
    public $Limit;

    /**
     * @param string $CLSRegion 日志集所属的地域，取值有： <li>ap-guangzhou：广州；</li> <li>ap-beijing：北京；</li> <li>ap-chengdu：成都；</li> <li>ap-chongqing：重庆；</li> <li>ap-nanjing：南京；</li> <li>ap-shanghai：上海；</li> <li>ap-singapore：新加坡。</li>
     * @param string $LogsetId 日志主题所属日志集 ID。
     * @param array $TopicIds 日志主题 ID 列表。如果不填，表示查询所有的日志主题。
     * @param integer $Offset 分页偏移量，默认值：0。
     * @param integer $Limit 返回记录条数，默认值：20，最大值：100。
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
        if (array_key_exists("CLSRegion",$param) and $param["CLSRegion"] !== null) {
            $this->CLSRegion = $param["CLSRegion"];
        }

        if (array_key_exists("LogsetId",$param) and $param["LogsetId"] !== null) {
            $this->LogsetId = $param["LogsetId"];
        }

        if (array_key_exists("TopicIds",$param) and $param["TopicIds"] !== null) {
            $this->TopicIds = $param["TopicIds"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
