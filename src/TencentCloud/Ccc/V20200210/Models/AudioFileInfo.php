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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 音频文件审核信息
 *
 * @method integer getFileId() 获取文件ID
 * @method void setFileId(integer $FileId) 设置文件ID
 * @method string getCustomFileName() 获取文件别名
 * @method void setCustomFileName(string $CustomFileName) 设置文件别名
 * @method string getAudioFileName() 获取文件名
 * @method void setAudioFileName(string $AudioFileName) 设置文件名
 * @method integer getStatus() 获取审核状态，0-未审核，1-审核通过，2-审核拒绝
 * @method void setStatus(integer $Status) 设置审核状态，0-未审核，1-审核通过，2-审核拒绝
 */
class AudioFileInfo extends AbstractModel
{
    /**
     * @var integer 文件ID
     */
    public $FileId;

    /**
     * @var string 文件别名
     */
    public $CustomFileName;

    /**
     * @var string 文件名
     */
    public $AudioFileName;

    /**
     * @var integer 审核状态，0-未审核，1-审核通过，2-审核拒绝
     */
    public $Status;

    /**
     * @param integer $FileId 文件ID
     * @param string $CustomFileName 文件别名
     * @param string $AudioFileName 文件名
     * @param integer $Status 审核状态，0-未审核，1-审核通过，2-审核拒绝
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

        if (array_key_exists("CustomFileName",$param) and $param["CustomFileName"] !== null) {
            $this->CustomFileName = $param["CustomFileName"];
        }

        if (array_key_exists("AudioFileName",$param) and $param["AudioFileName"] !== null) {
            $this->AudioFileName = $param["AudioFileName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
