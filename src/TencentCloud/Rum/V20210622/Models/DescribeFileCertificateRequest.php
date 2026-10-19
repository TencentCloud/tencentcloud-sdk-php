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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeFileCertificate请求参数结构体
 *
 * @method integer getTimeout() 获取超时时间，不填默认是 5 分钟
 * @method void setTimeout(integer $Timeout) 设置超时时间，不填默认是 5 分钟
 * @method integer getFileType() 获取bucket类型，不填默认1:web，2:app
 * @method void setFileType(integer $FileType) 设置bucket类型，不填默认1:web，2:app
 * @method integer getID() 获取ProjectID
 * @method void setID(integer $ID) 设置ProjectID
 * @method integer getRegionID() 获取reigon对应的id
 * @method void setRegionID(integer $RegionID) 设置reigon对应的id
 */
class DescribeFileCertificateRequest extends AbstractModel
{
    /**
     * @var integer 超时时间，不填默认是 5 分钟
     */
    public $Timeout;

    /**
     * @var integer bucket类型，不填默认1:web，2:app
     */
    public $FileType;

    /**
     * @var integer ProjectID
     */
    public $ID;

    /**
     * @var integer reigon对应的id
     */
    public $RegionID;

    /**
     * @param integer $Timeout 超时时间，不填默认是 5 分钟
     * @param integer $FileType bucket类型，不填默认1:web，2:app
     * @param integer $ID ProjectID
     * @param integer $RegionID reigon对应的id
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
        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("RegionID",$param) and $param["RegionID"] !== null) {
            $this->RegionID = $param["RegionID"];
        }
    }
}
