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
namespace TencentCloud\Bma\V20210624\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateCRRightFile请求参数结构体
 *
 * @method integer getWorkId() 获取xxx
 * @method void setWorkId(integer $WorkId) 设置xxx
 * @method array getFileList() 获取xxx
 * @method void setFileList(array $FileList) 设置xxx
 */
class CreateCRRightFileRequest extends AbstractModel
{
    /**
     * @var integer xxx
     */
    public $WorkId;

    /**
     * @var array xxx
     */
    public $FileList;

    /**
     * @param integer $WorkId xxx
     * @param array $FileList xxx
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
        if (array_key_exists("WorkId",$param) and $param["WorkId"] !== null) {
            $this->WorkId = $param["WorkId"];
        }

        if (array_key_exists("FileList",$param) and $param["FileList"] !== null) {
            $this->FileList = [];
            foreach ($param["FileList"] as $key => $value){
                $obj = new File();
                $obj->deserialize($value);
                array_push($this->FileList, $obj);
            }
        }
    }
}
