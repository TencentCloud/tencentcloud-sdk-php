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
 * @method string getApplicationId() 获取待修改表所在应用实例ID
 * @method void setApplicationId(string $ApplicationId) 设置待修改表所在应用实例ID
 * @method array getSelectedTables() 获取待修改表列表
 * @method void setSelectedTables(array $SelectedTables) 设置待修改表列表
 * @method array getExistingIdlFiles() 获取选中的已上传IDL文件列表，与NewIdlFiles必选其一
 * @method void setExistingIdlFiles(array $ExistingIdlFiles) 设置选中的已上传IDL文件列表，与NewIdlFiles必选其一
 * @method array getNewIdlFiles() 获取本次上传IDL文件列表，与ExistingIdlFiles必选其一
 * @method void setNewIdlFiles(array $NewIdlFiles) 设置本次上传IDL文件列表，与ExistingIdlFiles必选其一
 */

/**
 *CompareIdlFiles请求参数结构体
 */
class CompareIdlFilesRequest extends AbstractModel
{
    /**
     * @var string 待修改表所在应用实例ID
     */
    public $ApplicationId;

    /**
     * @var array 待修改表列表
     */
    public $SelectedTables;

    /**
     * @var array 选中的已上传IDL文件列表，与NewIdlFiles必选其一
     */
    public $ExistingIdlFiles;

    /**
     * @var array 本次上传IDL文件列表，与ExistingIdlFiles必选其一
     */
    public $NewIdlFiles;
    /**
     * @param string $ApplicationId 待修改表所在应用实例ID
     * @param array $SelectedTables 待修改表列表
     * @param array $ExistingIdlFiles 选中的已上传IDL文件列表，与NewIdlFiles必选其一
     * @param array $NewIdlFiles 本次上传IDL文件列表，与ExistingIdlFiles必选其一
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

        if (array_key_exists("SelectedTables",$param) and $param["SelectedTables"] !== null) {
            $this->SelectedTables = [];
            foreach ($param["SelectedTables"] as $key => $value){
                $obj = new SelectedTableInfo();
                $obj->deserialize($value);
                array_push($this->SelectedTables, $obj);
            }
        }

        if (array_key_exists("ExistingIdlFiles",$param) and $param["ExistingIdlFiles"] !== null) {
            $this->ExistingIdlFiles = [];
            foreach ($param["ExistingIdlFiles"] as $key => $value){
                $obj = new IdlFileInfo();
                $obj->deserialize($value);
                array_push($this->ExistingIdlFiles, $obj);
            }
        }

        if (array_key_exists("NewIdlFiles",$param) and $param["NewIdlFiles"] !== null) {
            $this->NewIdlFiles = [];
            foreach ($param["NewIdlFiles"] as $key => $value){
                $obj = new IdlFileInfo();
                $obj->deserialize($value);
                array_push($this->NewIdlFiles, $obj);
            }
        }
    }
}
