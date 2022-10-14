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
 * @method string getFileUrl() 获取文件下载地址
 * @method void setFileUrl(string $FileUrl) 设置文件下载地址
 * @method integer getFileType() 获取文件类型 1-委托书 2-授权书 5-存证证书 11-营业执照
 * @method void setFileType(integer $FileType) 设置文件类型 1-委托书 2-授权书 5-存证证书 11-营业执照
 * @method string getValidStartDate() 获取文件有效开始日期
 * @method void setValidStartDate(string $ValidStartDate) 设置文件有效开始日期
 * @method string getValidEndDate() 获取文件有效截止日期
 * @method void setValidEndDate(string $ValidEndDate) 设置文件有效截止日期
 */
class File extends AbstractModel
{
    /**
     * @var string 文件下载地址
     */
    public $FileUrl;

    /**
     * @var integer 文件类型 1-委托书 2-授权书 5-存证证书 11-营业执照
     */
    public $FileType;

    /**
     * @var string 文件有效开始日期
     */
    public $ValidStartDate;

    /**
     * @var string 文件有效截止日期
     */
    public $ValidEndDate;

    /**
     * @param string $FileUrl 文件下载地址
     * @param integer $FileType 文件类型 1-委托书 2-授权书 5-存证证书 11-营业执照
     * @param string $ValidStartDate 文件有效开始日期
     * @param string $ValidEndDate 文件有效截止日期
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
