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
 * 文件删除任务
 *
 * @method array getFileIdSet() 获取删除文件 ID 列表。
 * @method void setFileIdSet(array $FileIdSet) 设置删除文件 ID 列表。
 * @method array getFileDeleteResultInfo() 获取删除文件结果信息列表。
 * @method void setFileDeleteResultInfo(array $FileDeleteResultInfo) 设置删除文件结果信息列表。
 */
class FileDeleteTask extends AbstractModel
{
    /**
     * @var array 删除文件 ID 列表。
     */
    public $FileIdSet;

    /**
     * @var array 删除文件结果信息列表。
     */
    public $FileDeleteResultInfo;

    /**
     * @param array $FileIdSet 删除文件 ID 列表。
     * @param array $FileDeleteResultInfo 删除文件结果信息列表。
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
        if (array_key_exists("FileIdSet",$param) and $param["FileIdSet"] !== null) {
            $this->FileIdSet = $param["FileIdSet"];
        }

        if (array_key_exists("FileDeleteResultInfo",$param) and $param["FileDeleteResultInfo"] !== null) {
            $this->FileDeleteResultInfo = [];
            foreach ($param["FileDeleteResultInfo"] as $key => $value){
                $obj = new FileDeleteResultItem();
                $obj->deserialize($value);
                array_push($this->FileDeleteResultInfo, $obj);
            }
        }
    }
}
