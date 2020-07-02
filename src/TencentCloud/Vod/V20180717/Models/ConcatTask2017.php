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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 视频拼接任务信息，该结构仅用于对 2017 版[视频拼接](https://cloud.tencent.com/document/product/266/7821)接口发起的任务。
 *
 * @method string getTaskId() 获取视频拼接任务 ID。
 * @method void setTaskId(string $TaskId) 设置视频拼接任务 ID。
 * @method array getFileInfoSet() 获取视频拼接源文件信息。
 * @method void setFileInfoSet(array $FileInfoSet) 设置视频拼接源文件信息。
 */
class ConcatTask2017 extends AbstractModel
{
    /**
     * @var string 视频拼接任务 ID。
     */
    public $TaskId;

    /**
     * @var array 视频拼接源文件信息。
     */
    public $FileInfoSet;

    /**
     * @param string $TaskId 视频拼接任务 ID。
     * @param array $FileInfoSet 视频拼接源文件信息。
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
        if (array_key_exists('TaskId',$param) and $param['TaskId'] !== null) {
            $this->TaskId = $param['TaskId'];
        }

        if (array_key_exists('FileInfoSet',$param) and $param['FileInfoSet'] !== null) {
            $this->FileInfoSet = [];
            foreach ($param['FileInfoSet'] as $key => $value){
                $obj = new ConcatFileInfo2017();
                $obj->deserialize($value);
                array_push($this->FileInfoSet, $obj);
            }
        }
    }
}
