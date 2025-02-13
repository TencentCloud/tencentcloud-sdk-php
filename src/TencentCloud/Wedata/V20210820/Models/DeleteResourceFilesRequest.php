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
 * DeleteResourceFiles请求参数结构体
 *
 * @method string getProjectId() 获取项目id
 * @method void setProjectId(string $ProjectId) 设置项目id
 * @method boolean getUseStatus() 获取使用状态， 为ture 判断资源的使用状态，如果使用中则不能删除
 * @method void setUseStatus(boolean $UseStatus) 设置使用状态， 为ture 判断资源的使用状态，如果使用中则不能删除
 * @method array getResourceIds() 获取资源id列表
 * @method void setResourceIds(array $ResourceIds) 设置资源id列表
 * @method array getFilePaths() 获取需要删除的资源路径列表 即资源管理中的目录结构
 * @method void setFilePaths(array $FilePaths) 设置需要删除的资源路径列表 即资源管理中的目录结构
 */
class DeleteResourceFilesRequest extends AbstractModel
{
    /**
     * @var string 项目id
     */
    public $ProjectId;

    /**
     * @var boolean 使用状态， 为ture 判断资源的使用状态，如果使用中则不能删除
     */
    public $UseStatus;

    /**
     * @var array 资源id列表
     */
    public $ResourceIds;

    /**
     * @var array 需要删除的资源路径列表 即资源管理中的目录结构
     */
    public $FilePaths;

    /**
     * @param string $ProjectId 项目id
     * @param boolean $UseStatus 使用状态， 为ture 判断资源的使用状态，如果使用中则不能删除
     * @param array $ResourceIds 资源id列表
     * @param array $FilePaths 需要删除的资源路径列表 即资源管理中的目录结构
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

        if (array_key_exists("UseStatus",$param) and $param["UseStatus"] !== null) {
            $this->UseStatus = $param["UseStatus"];
        }

        if (array_key_exists("ResourceIds",$param) and $param["ResourceIds"] !== null) {
            $this->ResourceIds = $param["ResourceIds"];
        }

        if (array_key_exists("FilePaths",$param) and $param["FilePaths"] !== null) {
            $this->FilePaths = $param["FilePaths"];
        }
    }
}
