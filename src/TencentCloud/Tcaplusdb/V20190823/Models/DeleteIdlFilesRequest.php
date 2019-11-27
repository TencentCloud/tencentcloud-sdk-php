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
namespace TencentCloud\Tcaplusdb\V20190823\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getApplicationId() 获取应用实例ID
 * @method void setApplicationId(string $ApplicationId) 设置应用实例ID
 * @method array getIdlFiles() 获取待删除的IDL文件信息列表
 * @method void setIdlFiles(array $IdlFiles) 设置待删除的IDL文件信息列表
 */

/**
 *DeleteIdlFiles请求参数结构体
 */
class DeleteIdlFilesRequest extends AbstractModel
{
    /**
     * @var string 应用实例ID
     */
    public $ApplicationId;

    /**
     * @var array 待删除的IDL文件信息列表
     */
    public $IdlFiles;
    /**
     * @param string $ApplicationId 应用实例ID
     * @param array $IdlFiles 待删除的IDL文件信息列表
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
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
