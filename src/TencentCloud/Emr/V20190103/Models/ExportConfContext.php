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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 指定要导出配置的上下文结构
 *
 * @method integer getServiceType() 获取<p>服务配置</p>
 * @method void setServiceType(integer $ServiceType) 设置<p>服务配置</p>
 * @method string getFileName() 获取<p>文件名</p>
 * @method void setFileName(string $FileName) 设置<p>文件名</p>
 * @method string getServiceName() 获取<p>服务名称</p>
 * @method void setServiceName(string $ServiceName) 设置<p>服务名称</p>
 */
class ExportConfContext extends AbstractModel
{
    /**
     * @var integer <p>服务配置</p>
     */
    public $ServiceType;

    /**
     * @var string <p>文件名</p>
     */
    public $FileName;

    /**
     * @var string <p>服务名称</p>
     */
    public $ServiceName;

    /**
     * @param integer $ServiceType <p>服务配置</p>
     * @param string $FileName <p>文件名</p>
     * @param string $ServiceName <p>服务名称</p>
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

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }
    }
}
