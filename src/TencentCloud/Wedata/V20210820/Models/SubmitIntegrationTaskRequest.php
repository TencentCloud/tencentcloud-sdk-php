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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SubmitIntegrationTask请求参数结构体
 *
 * @method string getGroupId() 获取资源组Id
 * @method void setGroupId(string $GroupId) 设置资源组Id
 * @method string getResourceRegion() 获取资源所属region
 * @method void setResourceRegion(string $ResourceRegion) 设置资源所属region
 * @method string getRemotePath() 获取资源所属bucket
 * @method void setRemotePath(string $RemotePath) 设置资源所属bucket
 * @method string getProjectId() 获取项目id
 * @method void setProjectId(string $ProjectId) 设置项目id
 * @method string getResourceBucket() 获取资源所属bucket
 * @method void setResourceBucket(string $ResourceBucket) 设置资源所属bucket
 * @method string getResourceId() 获取资源id
 * @method void setResourceId(string $ResourceId) 设置资源id
 * @method string getRunParams() 获取高级运行临时参数
 * @method void setRunParams(string $RunParams) 设置高级运行临时参数
 */
class SubmitIntegrationTaskRequest extends AbstractModel
{
    /**
     * @var string 资源组Id
     */
    public $GroupId;

    /**
     * @var string 资源所属region
     */
    public $ResourceRegion;

    /**
     * @var string 资源所属bucket
     */
    public $RemotePath;

    /**
     * @var string 项目id
     */
    public $ProjectId;

    /**
     * @var string 资源所属bucket
     */
    public $ResourceBucket;

    /**
     * @var string 资源id
     */
    public $ResourceId;

    /**
     * @var string 高级运行临时参数
     */
    public $RunParams;

    /**
     * @param string $GroupId 资源组Id
     * @param string $ResourceRegion 资源所属region
     * @param string $RemotePath 资源所属bucket
     * @param string $ProjectId 项目id
     * @param string $ResourceBucket 资源所属bucket
     * @param string $ResourceId 资源id
     * @param string $RunParams 高级运行临时参数
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
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("ResourceRegion",$param) and $param["ResourceRegion"] !== null) {
            $this->ResourceRegion = $param["ResourceRegion"];
        }

        if (array_key_exists("RemotePath",$param) and $param["RemotePath"] !== null) {
            $this->RemotePath = $param["RemotePath"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ResourceBucket",$param) and $param["ResourceBucket"] !== null) {
            $this->ResourceBucket = $param["ResourceBucket"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("RunParams",$param) and $param["RunParams"] !== null) {
            $this->RunParams = $param["RunParams"];
        }
    }
}
