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
 * DeleteFilePath请求参数结构体
 *
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 * @method array getResourceIds() 获取资源ID
 * @method void setResourceIds(array $ResourceIds) 设置资源ID
 * @method string getUseStatus() 获取使用状态
 * @method void setUseStatus(string $UseStatus) 设置使用状态
 * @method array getFilePaths() 获取文件路径
 * @method void setFilePaths(array $FilePaths) 设置文件路径
 */
class DeleteFilePathRequest extends AbstractModel
{
    /**
     * @var string 项目ID
     */
    public $ProjectId;

    /**
     * @var array 资源ID
     */
    public $ResourceIds;

    /**
     * @var string 使用状态
     */
    public $UseStatus;

    /**
     * @var array 文件路径
     */
    public $FilePaths;

    /**
     * @param string $ProjectId 项目ID
     * @param array $ResourceIds 资源ID
     * @param string $UseStatus 使用状态
     * @param array $FilePaths 文件路径
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ResourceIds",$param) and $param["ResourceIds"] !== null) {
            $this->ResourceIds = $param["ResourceIds"];
        }

        if (array_key_exists("UseStatus",$param) and $param["UseStatus"] !== null) {
            $this->UseStatus = $param["UseStatus"];
        }

        if (array_key_exists("FilePaths",$param) and $param["FilePaths"] !== null) {
            $this->FilePaths = $param["FilePaths"];
        }
    }
}
