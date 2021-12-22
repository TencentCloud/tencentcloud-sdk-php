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
 * DeleteApplication请求参数结构体
 *
 * @method string getApplicationId() 获取服务Id
 * @method void setApplicationId(string $ApplicationId) 设置服务Id
 * @method string getEnvironmentId() 获取环境ID
 * @method void setEnvironmentId(string $EnvironmentId) 设置环境ID
 * @method integer getSourceChannel() 获取来源渠道
 * @method void setSourceChannel(integer $SourceChannel) 设置来源渠道
 * @method boolean getDeleteApplicationIfNoRunningVersion() 获取当服务没有任何运行版本时，是否删除此服务
 * @method void setDeleteApplicationIfNoRunningVersion(boolean $DeleteApplicationIfNoRunningVersion) 设置当服务没有任何运行版本时，是否删除此服务
 */
class DeleteApplicationRequest extends AbstractModel
{
    /**
     * @var string 服务Id
     */
    public $ApplicationId;

    /**
     * @var string 环境ID
     */
    public $EnvironmentId;

    /**
     * @var integer 来源渠道
     */
    public $SourceChannel;

    /**
     * @var boolean 当服务没有任何运行版本时，是否删除此服务
     */
    public $DeleteApplicationIfNoRunningVersion;

    /**
     * @param string $ApplicationId 服务Id
     * @param string $EnvironmentId 环境ID
     * @param integer $SourceChannel 来源渠道
     * @param boolean $DeleteApplicationIfNoRunningVersion 当服务没有任何运行版本时，是否删除此服务
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
        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("EnvironmentId",$param) and $param["EnvironmentId"] !== null) {
            $this->EnvironmentId = $param["EnvironmentId"];
        }

        if (array_key_exists("SourceChannel",$param) and $param["SourceChannel"] !== null) {
            $this->SourceChannel = $param["SourceChannel"];
        }

        if (array_key_exists("DeleteApplicationIfNoRunningVersion",$param) and $param["DeleteApplicationIfNoRunningVersion"] !== null) {
            $this->DeleteApplicationIfNoRunningVersion = $param["DeleteApplicationIfNoRunningVersion"];
        }
    }
}
