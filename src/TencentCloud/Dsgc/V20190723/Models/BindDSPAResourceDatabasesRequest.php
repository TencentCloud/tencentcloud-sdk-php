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
namespace TencentCloud\Dsgc\V20190723\Models;
use TencentCloud\Common\AbstractModel;

/**
 * BindDSPAResourceDatabases请求参数结构体
 *
 * @method string getDspaId() 获取DSPA实例ID。
 * @method void setDspaId(string $DspaId) 设置DSPA实例ID。
 * @method string getResourceId() 获取数据库实例ID。
 * @method void setResourceId(string $ResourceId) 设置数据库实例ID。
 * @method string getMetaType() 获取数据库实例类型。
 * @method void setMetaType(string $MetaType) 设置数据库实例类型。
 * @method array getBindDbItems() 获取绑定DB列表。
 * @method void setBindDbItems(array $BindDbItems) 设置绑定DB列表。
 * @method array getUnbindDbItems() 获取解绑DB列表。
 * @method void setUnbindDbItems(array $UnbindDbItems) 设置解绑DB列表。
 */
class BindDSPAResourceDatabasesRequest extends AbstractModel
{
    /**
     * @var string DSPA实例ID。
     */
    public $DspaId;

    /**
     * @var string 数据库实例ID。
     */
    public $ResourceId;

    /**
     * @var string 数据库实例类型。
     */
    public $MetaType;

    /**
     * @var array 绑定DB列表。
     */
    public $BindDbItems;

    /**
     * @var array 解绑DB列表。
     */
    public $UnbindDbItems;

    /**
     * @param string $DspaId DSPA实例ID。
     * @param string $ResourceId 数据库实例ID。
     * @param string $MetaType 数据库实例类型。
     * @param array $BindDbItems 绑定DB列表。
     * @param array $UnbindDbItems 解绑DB列表。
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
        if (array_key_exists("DspaId",$param) and $param["DspaId"] !== null) {
            $this->DspaId = $param["DspaId"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("MetaType",$param) and $param["MetaType"] !== null) {
            $this->MetaType = $param["MetaType"];
        }

        if (array_key_exists("BindDbItems",$param) and $param["BindDbItems"] !== null) {
            $this->BindDbItems = [];
            foreach ($param["BindDbItems"] as $key => $value){
                $obj = new DbResourceItem();
                $obj->deserialize($value);
                array_push($this->BindDbItems, $obj);
            }
        }

        if (array_key_exists("UnbindDbItems",$param) and $param["UnbindDbItems"] !== null) {
            $this->UnbindDbItems = [];
            foreach ($param["UnbindDbItems"] as $key => $value){
                $obj = new DbResourceItem();
                $obj->deserialize($value);
                array_push($this->UnbindDbItems, $obj);
            }
        }
    }
}
