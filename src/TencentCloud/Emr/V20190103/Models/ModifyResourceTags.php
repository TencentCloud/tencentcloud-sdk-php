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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 强制修改标签
 *
 * @method string getResourceId() 获取集群id 或者 cvm id
 * @method void setResourceId(string $ResourceId) 设置集群id 或者 cvm id
 * @method string getResource() 获取资源6段式表达式
 * @method void setResource(string $Resource) 设置资源6段式表达式
 * @method string getResourcePrefix() 获取资源前缀
 * @method void setResourcePrefix(string $ResourcePrefix) 设置资源前缀
 * @method string getResourceRegion() 获取ap-beijing
 * @method void setResourceRegion(string $ResourceRegion) 设置ap-beijing
 * @method string getServiceType() 获取emr
 * @method void setServiceType(string $ServiceType) 设置emr
 * @method array getDeleteTags() 获取删除的标签列表
 * @method void setDeleteTags(array $DeleteTags) 设置删除的标签列表
 * @method array getAddTags() 获取添加的标签列表
 * @method void setAddTags(array $AddTags) 设置添加的标签列表
 * @method array getModifyTags() 获取修改的标签列表
 * @method void setModifyTags(array $ModifyTags) 设置修改的标签列表
 */
class ModifyResourceTags extends AbstractModel
{
    /**
     * @var string 集群id 或者 cvm id
     */
    public $ResourceId;

    /**
     * @var string 资源6段式表达式
     */
    public $Resource;

    /**
     * @var string 资源前缀
     */
    public $ResourcePrefix;

    /**
     * @var string ap-beijing
     */
    public $ResourceRegion;

    /**
     * @var string emr
     */
    public $ServiceType;

    /**
     * @var array 删除的标签列表
     */
    public $DeleteTags;

    /**
     * @var array 添加的标签列表
     */
    public $AddTags;

    /**
     * @var array 修改的标签列表
     */
    public $ModifyTags;

    /**
     * @param string $ResourceId 集群id 或者 cvm id
     * @param string $Resource 资源6段式表达式
     * @param string $ResourcePrefix 资源前缀
     * @param string $ResourceRegion ap-beijing
     * @param string $ServiceType emr
     * @param array $DeleteTags 删除的标签列表
     * @param array $AddTags 添加的标签列表
     * @param array $ModifyTags 修改的标签列表
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
        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("Resource",$param) and $param["Resource"] !== null) {
            $this->Resource = $param["Resource"];
        }

        if (array_key_exists("ResourcePrefix",$param) and $param["ResourcePrefix"] !== null) {
            $this->ResourcePrefix = $param["ResourcePrefix"];
        }

        if (array_key_exists("ResourceRegion",$param) and $param["ResourceRegion"] !== null) {
            $this->ResourceRegion = $param["ResourceRegion"];
        }

        if (array_key_exists("ServiceType",$param) and $param["ServiceType"] !== null) {
            $this->ServiceType = $param["ServiceType"];
        }

        if (array_key_exists("DeleteTags",$param) and $param["DeleteTags"] !== null) {
            $this->DeleteTags = [];
            foreach ($param["DeleteTags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->DeleteTags, $obj);
            }
        }

        if (array_key_exists("AddTags",$param) and $param["AddTags"] !== null) {
            $this->AddTags = [];
            foreach ($param["AddTags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->AddTags, $obj);
            }
        }

        if (array_key_exists("ModifyTags",$param) and $param["ModifyTags"] !== null) {
            $this->ModifyTags = [];
            foreach ($param["ModifyTags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->ModifyTags, $obj);
            }
        }
    }
}
