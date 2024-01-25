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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ImportFiles请求参数结构体
 *
 * @method ImportRequestInfo getImportRequestInfo() 获取导入相关信息
 * @method void setImportRequestInfo(ImportRequestInfo $ImportRequestInfo) 设置导入相关信息
 */
class ImportFilesRequest extends AbstractModel
{
    /**
     * @var ImportRequestInfo 导入相关信息
     */
    public $ImportRequestInfo;

    /**
     * @param ImportRequestInfo $ImportRequestInfo 导入相关信息
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
        if (array_key_exists("ImportRequestInfo",$param) and $param["ImportRequestInfo"] !== null) {
            $this->ImportRequestInfo = new ImportRequestInfo();
            $this->ImportRequestInfo->deserialize($param["ImportRequestInfo"]);
        }
    }
}
