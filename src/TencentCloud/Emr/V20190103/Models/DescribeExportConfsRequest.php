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
 * DescribeExportConfs请求参数结构体
 *
 * @method string getInstanceId() 获取<p>实例ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例ID</p>
 * @method array getExportConfContexts() 获取<p>指定需要导出的配置</p>
 * @method void setExportConfContexts(array $ExportConfContexts) 设置<p>指定需要导出的配置</p>
 * @method integer getExportType() 获取<p>导出类型</p><p>枚举值：</p><ul><li>0： 全部配置</li><li>1： 只导出自定义和修改过的配置</li></ul>
 * @method void setExportType(integer $ExportType) 设置<p>导出类型</p><p>枚举值：</p><ul><li>0： 全部配置</li><li>1： 只导出自定义和修改过的配置</li></ul>
 * @method string getIp() 获取<p>节点ip</p>
 * @method void setIp(string $Ip) 设置<p>节点ip</p>
 * @method string getConfGroupName() 获取<p>配置组名称</p>
 * @method void setConfGroupName(string $ConfGroupName) 设置<p>配置组名称</p>
 */
class DescribeExportConfsRequest extends AbstractModel
{
    /**
     * @var string <p>实例ID</p>
     */
    public $InstanceId;

    /**
     * @var array <p>指定需要导出的配置</p>
     */
    public $ExportConfContexts;

    /**
     * @var integer <p>导出类型</p><p>枚举值：</p><ul><li>0： 全部配置</li><li>1： 只导出自定义和修改过的配置</li></ul>
     */
    public $ExportType;

    /**
     * @var string <p>节点ip</p>
     */
    public $Ip;

    /**
     * @var string <p>配置组名称</p>
     */
    public $ConfGroupName;

    /**
     * @param string $InstanceId <p>实例ID</p>
     * @param array $ExportConfContexts <p>指定需要导出的配置</p>
     * @param integer $ExportType <p>导出类型</p><p>枚举值：</p><ul><li>0： 全部配置</li><li>1： 只导出自定义和修改过的配置</li></ul>
     * @param string $Ip <p>节点ip</p>
     * @param string $ConfGroupName <p>配置组名称</p>
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

        if (array_key_exists("ExportConfContexts",$param) and $param["ExportConfContexts"] !== null) {
            $this->ExportConfContexts = [];
            foreach ($param["ExportConfContexts"] as $key => $value){
                $obj = new ExportConfContext();
                $obj->deserialize($value);
                array_push($this->ExportConfContexts, $obj);
            }
        }

        if (array_key_exists("ExportType",$param) and $param["ExportType"] !== null) {
            $this->ExportType = $param["ExportType"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("ConfGroupName",$param) and $param["ConfGroupName"] !== null) {
            $this->ConfGroupName = $param["ConfGroupName"];
        }
    }
}
