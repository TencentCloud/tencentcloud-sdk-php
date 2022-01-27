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
namespace TencentCloud\Cme\V20191029\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 导入媒资信息
 *
 * @method string getFileId() 获取云点播文件 FileId。
 * @method void setFileId(string $FileId) 设置云点播文件 FileId。
 * @method string getMaterialId() 获取媒体 Id。
 * @method void setMaterialId(string $MaterialId) 设置媒体 Id。
 */
class ImportMediaInfo extends AbstractModel
{
    /**
     * @var string 云点播文件 FileId。
     */
    public $FileId;

    /**
     * @var string 媒体 Id。
     */
    public $MaterialId;

    /**
     * @param string $FileId 云点播文件 FileId。
     * @param string $MaterialId 媒体 Id。
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
        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("MaterialId",$param) and $param["MaterialId"] !== null) {
            $this->MaterialId = $param["MaterialId"];
        }
    }
}
