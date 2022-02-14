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
namespace TencentCloud\Cii\V20210408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeReportClassify请求参数结构体
 *
 * @method string getServiceType() 获取服务类型
Structured 仅结构化
Underwrite 结构化+核保
 * @method void setServiceType(string $ServiceType) 设置服务类型
Structured 仅结构化
Underwrite 结构化+核保
 * @method array getFileList() 获取文件地址数组
 * @method void setFileList(array $FileList) 设置文件地址数组
 */
class DescribeReportClassifyRequest extends AbstractModel
{
    /**
     * @var string 服务类型
Structured 仅结构化
Underwrite 结构化+核保
     */
    public $ServiceType;

    /**
     * @var array 文件地址数组
     */
    public $FileList;

    /**
     * @param string $ServiceType 服务类型
Structured 仅结构化
Underwrite 结构化+核保
     * @param array $FileList 文件地址数组
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
        if (array_key_exists("ServiceType",$param) and $param["ServiceType"] !== null) {
            $this->ServiceType = $param["ServiceType"];
        }

        if (array_key_exists("FileList",$param) and $param["FileList"] !== null) {
            $this->FileList = $param["FileList"];
        }
    }
}
