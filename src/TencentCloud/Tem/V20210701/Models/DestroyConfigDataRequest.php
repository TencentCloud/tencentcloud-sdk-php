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
 * DestroyConfigData请求参数结构体
 *
 * @method string getEnvironmentId() 获取环境 ID
 * @method void setEnvironmentId(string $EnvironmentId) 设置环境 ID
 * @method string getName() 获取配置名
 * @method void setName(string $Name) 设置配置名
 * @method integer getSourceChannel() 获取来源渠道
 * @method void setSourceChannel(integer $SourceChannel) 设置来源渠道
 */
class DestroyConfigDataRequest extends AbstractModel
{
    /**
     * @var string 环境 ID
     */
    public $EnvironmentId;

    /**
     * @var string 配置名
     */
    public $Name;

    /**
     * @var integer 来源渠道
     */
    public $SourceChannel;

    /**
     * @param string $EnvironmentId 环境 ID
     * @param string $Name 配置名
     * @param integer $SourceChannel 来源渠道
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("SourceChannel",$param) and $param["SourceChannel"] !== null) {
            $this->SourceChannel = $param["SourceChannel"];
        }
    }
}
