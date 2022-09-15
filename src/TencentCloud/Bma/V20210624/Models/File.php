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
 * 权属文件列表
 *
 * @method string getFileUrl() 获取xxx
 * @method void setFileUrl(string $FileUrl) 设置xxx
 * @method integer getFileType() 获取xxx
 * @method void setFileType(integer $FileType) 设置xxx
 * @method string getValidStartDate() 获取xxx
 * @method void setValidStartDate(string $ValidStartDate) 设置xxx
 * @method string getValidEndDate() 获取xxx
 * @method void setValidEndDate(string $ValidEndDate) 设置xxx
 */
class File extends AbstractModel
{
    /**
     * @var string xxx
     */
    public $FileUrl;

    /**
     * @var integer xxx
     */
    public $FileType;

    /**
     * @var string xxx
     */
    public $ValidStartDate;

    /**
     * @var string xxx
     */
    public $ValidEndDate;

    /**
     * @param string $FileUrl xxx
     * @param integer $FileType xxx
     * @param string $ValidStartDate xxx
     * @param string $ValidEndDate xxx
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
        if (array_key_exists("FileUrl",$param) and $param["FileUrl"] !== null) {
            $this->FileUrl = $param["FileUrl"];
        }

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("ValidStartDate",$param) and $param["ValidStartDate"] !== null) {
            $this->ValidStartDate = $param["ValidStartDate"];
        }

        if (array_key_exists("ValidEndDate",$param) and $param["ValidEndDate"] !== null) {
            $this->ValidEndDate = $param["ValidEndDate"];
        }
    }
}
