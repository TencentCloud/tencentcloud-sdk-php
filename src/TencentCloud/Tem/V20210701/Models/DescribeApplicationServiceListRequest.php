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
namespace TencentCloud\Tem\V20210701\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeApplicationServiceList请求参数结构体
 *
 * @method string getEnvironmentId() 获取namespace id
 * @method void setEnvironmentId(string $EnvironmentId) 设置namespace id
 * @method string getApplicationId() 获取服务ID
 * @method void setApplicationId(string $ApplicationId) 设置服务ID
 * @method integer getSourceChannel() 获取xx
 * @method void setSourceChannel(integer $SourceChannel) 设置xx
 */
class DescribeApplicationServiceListRequest extends AbstractModel
{
    /**
     * @var string namespace id
     */
    public $EnvironmentId;

    /**
     * @var string 服务ID
     */
    public $ApplicationId;

    /**
     * @var integer xx
     */
    public $SourceChannel;

    /**
     * @param string $EnvironmentId namespace id
     * @param string $ApplicationId 服务ID
     * @param integer $SourceChannel xx
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
        if (array_key_exists("EnvironmentId",$param) and $param["EnvironmentId"] !== null) {
            $this->EnvironmentId = $param["EnvironmentId"];
        }

        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("SourceChannel",$param) and $param["SourceChannel"] !== null) {
            $this->SourceChannel = $param["SourceChannel"];
        }
    }
}
