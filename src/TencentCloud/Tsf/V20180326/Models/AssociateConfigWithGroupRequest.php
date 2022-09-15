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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AssociateConfigWithGroup请求参数结构体
 *
 * @method string getConfigId() 获取配置项id
 * @method void setConfigId(string $ConfigId) 设置配置项id
 * @method array getGroups() 获取部署组信息
 * @method void setGroups(array $Groups) 设置部署组信息
 * @method integer getSelectAll() 获取是否选择全部投递，1 表示全部，0或不填表示非全部
 * @method void setSelectAll(integer $SelectAll) 设置是否选择全部投递，1 表示全部，0或不填表示非全部
 * @method string getNamespaceId() 获取命名空间id
 * @method void setNamespaceId(string $NamespaceId) 设置命名空间id
 * @method string getClusterId() 获取集群id
 * @method void setClusterId(string $ClusterId) 设置集群id
 * @method string getSearchWord() 获取模糊搜索关键词
 * @method void setSearchWord(string $SearchWord) 设置模糊搜索关键词
 */
class AssociateConfigWithGroupRequest extends AbstractModel
{
    /**
     * @var string 配置项id
     */
    public $ConfigId;

    /**
     * @var array 部署组信息
     */
    public $Groups;

    /**
     * @var integer 是否选择全部投递，1 表示全部，0或不填表示非全部
     */
    public $SelectAll;

    /**
     * @var string 命名空间id
     */
    public $NamespaceId;

    /**
     * @var string 集群id
     */
    public $ClusterId;

    /**
     * @var string 模糊搜索关键词
     */
    public $SearchWord;

    /**
     * @param string $ConfigId 配置项id
     * @param array $Groups 部署组信息
     * @param integer $SelectAll 是否选择全部投递，1 表示全部，0或不填表示非全部
     * @param string $NamespaceId 命名空间id
     * @param string $ClusterId 集群id
     * @param string $SearchWord 模糊搜索关键词
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
        if (array_key_exists("ConfigId",$param) and $param["ConfigId"] !== null) {
            $this->ConfigId = $param["ConfigId"];
        }

        if (array_key_exists("Groups",$param) and $param["Groups"] !== null) {
            $this->Groups = [];
            foreach ($param["Groups"] as $key => $value){
                $obj = new GroupInfo();
                $obj->deserialize($value);
                array_push($this->Groups, $obj);
            }
        }

        if (array_key_exists("SelectAll",$param) and $param["SelectAll"] !== null) {
            $this->SelectAll = $param["SelectAll"];
        }

        if (array_key_exists("NamespaceId",$param) and $param["NamespaceId"] !== null) {
            $this->NamespaceId = $param["NamespaceId"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("SearchWord",$param) and $param["SearchWord"] !== null) {
            $this->SearchWord = $param["SearchWord"];
        }
    }
}
