<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Tcaplusdb\V20190823\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteIdlFiles请求参数结构体
 *
 * @method string getClusterId() 获取IDL所属集群ID
 * @method void setClusterId(string $ClusterId) 设置IDL所属集群ID
 * @method array getIdlFiles() 获取待删除的IDL文件信息列表
 * @method void setIdlFiles(array $IdlFiles) 设置待删除的IDL文件信息列表
 */
class DeleteIdlFilesRequest extends AbstractModel
{
    /**
     * @var string IDL所属集群ID
     */
    public $ClusterId;

    /**
     * @var array 待删除的IDL文件信息列表
     */
    public $IdlFiles;

    /**
     * @param string $ClusterId IDL所属集群ID
     * @param array $IdlFiles 待删除的IDL文件信息列表
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("IdlFiles",$param) and $param["IdlFiles"] !== null) {
            $this->IdlFiles = [];
            foreach ($param["IdlFiles"] as $key => $value){
                $obj = new IdlFileInfo();
                $obj->deserialize($value);
                array_push($this->IdlFiles, $obj);
            }
        }
    }
}
