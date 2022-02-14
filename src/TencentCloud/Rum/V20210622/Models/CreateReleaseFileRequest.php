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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateReleaseFile请求参数结构体
 *
 * @method integer getProjectID() 获取项目 id
 * @method void setProjectID(integer $ProjectID) 设置项目 id
 * @method array getFiles() 获取文件信息列表
 * @method void setFiles(array $Files) 设置文件信息列表
 */
class CreateReleaseFileRequest extends AbstractModel
{
    /**
     * @var integer 项目 id
     */
    public $ProjectID;

    /**
     * @var array 文件信息列表
     */
    public $Files;

    /**
     * @param integer $ProjectID 项目 id
     * @param array $Files 文件信息列表
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
        if (array_key_exists("ProjectID",$param) and $param["ProjectID"] !== null) {
            $this->ProjectID = $param["ProjectID"];
        }

        if (array_key_exists("Files",$param) and $param["Files"] !== null) {
            $this->Files = [];
            foreach ($param["Files"] as $key => $value){
                $obj = new ReleaseFile();
                $obj->deserialize($value);
                array_push($this->Files, $obj);
            }
        }
    }
}
