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
 * 日志推送目标。
 *
 * @method string getCLSRegion() 获取日志集所属地区：
<li>ap-guangzhou：广州；</li>
<li>ap-beijing：北京；</li>
<li>ap-chengdu：成都；</li>
<li>ap-chongqing：重庆；</li>
<li>ap-nanjing：南京；</li>
<li>ap-shanghai：上海；</li>
<li>ap-singapore：新加坡。</li>
 * @method void setCLSRegion(string $CLSRegion) 设置日志集所属地区：
<li>ap-guangzhou：广州；</li>
<li>ap-beijing：北京；</li>
<li>ap-chengdu：成都；</li>
<li>ap-chongqing：重庆；</li>
<li>ap-nanjing：南京；</li>
<li>ap-shanghai：上海；</li>
<li>ap-singapore：新加坡。</li>
 * @method string getTopicId() 获取投递的目标主题 ID。
 * @method void setTopicId(string $TopicId) 设置投递的目标主题 ID。
 * @method string getLogsetId() 获取投递的目标集 ID。
 * @method void setLogsetId(string $LogsetId) 设置投递的目标集 ID。
 * @method string getSwitch() 获取日志投递状态。
 ON：启用；
 OFF：停用。
 * @method void setSwitch(string $Switch) 设置日志投递状态。
 ON：启用；
 OFF：停用。
 */
class AreaCLSTargetInfo extends AbstractModel
{
    /**
     * @var string 日志集所属地区：
<li>ap-guangzhou：广州；</li>
<li>ap-beijing：北京；</li>
<li>ap-chengdu：成都；</li>
<li>ap-chongqing：重庆；</li>
<li>ap-nanjing：南京；</li>
<li>ap-shanghai：上海；</li>
<li>ap-singapore：新加坡。</li>
     */
    public $CLSRegion;

    /**
     * @var string 投递的目标主题 ID。
     */
    public $TopicId;

    /**
     * @var string 投递的目标集 ID。
     */
    public $LogsetId;

    /**
     * @var string 日志投递状态。
 ON：启用；
 OFF：停用。
     */
    public $Switch;

    /**
     * @param string $CLSRegion 日志集所属地区：
<li>ap-guangzhou：广州；</li>
<li>ap-beijing：北京；</li>
<li>ap-chengdu：成都；</li>
<li>ap-chongqing：重庆；</li>
<li>ap-nanjing：南京；</li>
<li>ap-shanghai：上海；</li>
<li>ap-singapore：新加坡。</li>
     * @param string $TopicId 投递的目标主题 ID。
     * @param string $LogsetId 投递的目标集 ID。
     * @param string $Switch 日志投递状态。
 ON：启用；
 OFF：停用。
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

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("LogsetId",$param) and $param["LogsetId"] !== null) {
            $this->LogsetId = $param["LogsetId"];
        }

        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }
    }
}
