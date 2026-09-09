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
 * ModifyServiceParamsByExportConfs请求参数结构体
 *
 * @method string getInstanceId() 获取<p>集群id</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>集群id</p>
 * @method array getExportConfParamList() 获取<p>导入配置项</p>
 * @method void setExportConfParamList(array $ExportConfParamList) 设置<p>导入配置项</p>
 * @method array getIpList() 获取<p>ip</p>
 * @method void setIpList(array $IpList) 设置<p>ip</p>
 * @method string getConfGroupName() 获取<p>配置组</p>
 * @method void setConfGroupName(string $ConfGroupName) 设置<p>配置组</p>
 */
class ModifyServiceParamsByExportConfsRequest extends AbstractModel
{
    /**
     * @var string <p>集群id</p>
     */
    public $InstanceId;

    /**
     * @var array <p>导入配置项</p>
     */
    public $ExportConfParamList;

    /**
     * @var array <p>ip</p>
     */
    public $IpList;

    /**
     * @var string <p>配置组</p>
     */
    public $ConfGroupName;

    /**
     * @param string $InstanceId <p>集群id</p>
     * @param array $ExportConfParamList <p>导入配置项</p>
     * @param array $IpList <p>ip</p>
     * @param string $ConfGroupName <p>配置组</p>
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

        if (array_key_exists("ExportConfParamList",$param) and $param["ExportConfParamList"] !== null) {
            $this->ExportConfParamList = [];
            foreach ($param["ExportConfParamList"] as $key => $value){
                $obj = new ExportConfMeta();
                $obj->deserialize($value);
                array_push($this->ExportConfParamList, $obj);
            }
        }

        if (array_key_exists("IpList",$param) and $param["IpList"] !== null) {
            $this->IpList = $param["IpList"];
        }

        if (array_key_exists("ConfGroupName",$param) and $param["ConfGroupName"] !== null) {
            $this->ConfGroupName = $param["ConfGroupName"];
        }
    }
}
