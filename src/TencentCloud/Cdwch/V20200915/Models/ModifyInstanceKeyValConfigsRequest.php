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
namespace TencentCloud\Cdwch\V20200915\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyInstanceKeyValConfigs请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method array getAddItems() 获取新增配置列表
 * @method void setAddItems(array $AddItems) 设置新增配置列表
 * @method array getUpdateItems() 获取更新配置列表
 * @method void setUpdateItems(array $UpdateItems) 设置更新配置列表
 * @method InstanceConfigItem getDeleteItems() 获取删除配置列表
 * @method void setDeleteItems(InstanceConfigItem $DeleteItems) 设置删除配置列表
 * @method array getDelItems() 获取删除配置列表
 * @method void setDelItems(array $DelItems) 设置删除配置列表
 * @method string getRemark() 获取备注
 * @method void setRemark(string $Remark) 设置备注
 */
class ModifyInstanceKeyValConfigsRequest extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var array 新增配置列表
     */
    public $AddItems;

    /**
     * @var array 更新配置列表
     */
    public $UpdateItems;

    /**
     * @var InstanceConfigItem 删除配置列表
     */
    public $DeleteItems;

    /**
     * @var array 删除配置列表
     */
    public $DelItems;

    /**
     * @var string 备注
     */
    public $Remark;

    /**
     * @param string $InstanceId 实例ID
     * @param array $AddItems 新增配置列表
     * @param array $UpdateItems 更新配置列表
     * @param InstanceConfigItem $DeleteItems 删除配置列表
     * @param array $DelItems 删除配置列表
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

        if (array_key_exists("AddItems",$param) and $param["AddItems"] !== null) {
            $this->AddItems = [];
            foreach ($param["AddItems"] as $key => $value){
                $obj = new InstanceConfigItem();
                $obj->deserialize($value);
                array_push($this->AddItems, $obj);
            }
        }

        if (array_key_exists("UpdateItems",$param) and $param["UpdateItems"] !== null) {
            $this->UpdateItems = [];
            foreach ($param["UpdateItems"] as $key => $value){
                $obj = new InstanceConfigItem();
                $obj->deserialize($value);
                array_push($this->UpdateItems, $obj);
            }
        }

        if (array_key_exists("DeleteItems",$param) and $param["DeleteItems"] !== null) {
            $this->DeleteItems = new InstanceConfigItem();
            $this->DeleteItems->deserialize($param["DeleteItems"]);
        }

        if (array_key_exists("DelItems",$param) and $param["DelItems"] !== null) {
            $this->DelItems = [];
            foreach ($param["DelItems"] as $key => $value){
                $obj = new InstanceConfigItem();
                $obj->deserialize($value);
                array_push($this->DelItems, $obj);
            }
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
