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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateBusinessIntelligenceFile请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getFileURL() 获取COS_URL
 * @method void setFileURL(string $FileURL) 设置COS_URL
 * @method string getFileType() 获取文件类型 FLAT-作为数据源的平面文件， SSIS-ssis项目包
 * @method void setFileType(string $FileType) 设置文件类型 FLAT-作为数据源的平面文件， SSIS-ssis项目包
 * @method string getRemark() 获取备注
 * @method void setRemark(string $Remark) 设置备注
 */
class CreateBusinessIntelligenceFileRequest extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string COS_URL
     */
    public $FileURL;

    /**
     * @var string 文件类型 FLAT-作为数据源的平面文件， SSIS-ssis项目包
     */
    public $FileType;

    /**
     * @var string 备注
     */
    public $Remark;

    /**
     * @param string $InstanceId 实例ID
     * @param string $FileURL COS_URL
     * @param string $FileType 文件类型 FLAT-作为数据源的平面文件， SSIS-ssis项目包
     * @param string $Remark 备注
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("FileURL",$param) and $param["FileURL"] !== null) {
            $this->FileURL = $param["FileURL"];
        }

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
