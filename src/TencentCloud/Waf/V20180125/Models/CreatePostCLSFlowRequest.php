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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreatePostCLSFlow请求参数结构体
 *
 * @method string getCLSRegion() 获取投递的CLS所在区域，默认为ap-shanghai
 * @method void setCLSRegion(string $CLSRegion) 设置投递的CLS所在区域，默认为ap-shanghai
 * @method string getLogsetName() 获取投递的CLS所在日志集合名称，默认为 waf_post_logset
 * @method void setLogsetName(string $LogsetName) 设置投递的CLS所在日志集合名称，默认为 waf_post_logset
 * @method integer getLogType() 获取1-访问日志，2-攻击日志，默认为访问日志。
 * @method void setLogType(integer $LogType) 设置1-访问日志，2-攻击日志，默认为访问日志。
 * @method string getLogTopicName() 获取投递的CLS所在日志主题的名称，默认为 waf_post_logtopic
 * @method void setLogTopicName(string $LogTopicName) 设置投递的CLS所在日志主题的名称，默认为 waf_post_logtopic
 */
class CreatePostCLSFlowRequest extends AbstractModel
{
    /**
     * @var string 投递的CLS所在区域，默认为ap-shanghai
     */
    public $CLSRegion;

    /**
     * @var string 投递的CLS所在日志集合名称，默认为 waf_post_logset
     */
    public $LogsetName;

    /**
     * @var integer 1-访问日志，2-攻击日志，默认为访问日志。
     */
    public $LogType;

    /**
     * @var string 投递的CLS所在日志主题的名称，默认为 waf_post_logtopic
     */
    public $LogTopicName;

    /**
     * @param string $CLSRegion 投递的CLS所在区域，默认为ap-shanghai
     * @param string $LogsetName 投递的CLS所在日志集合名称，默认为 waf_post_logset
     * @param integer $LogType 1-访问日志，2-攻击日志，默认为访问日志。
     * @param string $LogTopicName 投递的CLS所在日志主题的名称，默认为 waf_post_logtopic
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

        if (array_key_exists("LogsetName",$param) and $param["LogsetName"] !== null) {
            $this->LogsetName = $param["LogsetName"];
        }

        if (array_key_exists("LogType",$param) and $param["LogType"] !== null) {
            $this->LogType = $param["LogType"];
        }

        if (array_key_exists("LogTopicName",$param) and $param["LogTopicName"] !== null) {
            $this->LogTopicName = $param["LogTopicName"];
        }
    }
}
