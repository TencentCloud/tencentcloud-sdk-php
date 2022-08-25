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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateGlobalDomain请求参数结构体
 *
 * @method integer getProjectId() 获取域名所属项目ID
 * @method void setProjectId(integer $ProjectId) 设置域名所属项目ID
 * @method string getDefaultValue() 获取域名默认入口
 * @method void setDefaultValue(string $DefaultValue) 设置域名默认入口
 * @method string getAlias() 获取别名
 * @method void setAlias(string $Alias) 设置别名
 * @method array getTagSet() 获取标签列表
 * @method void setTagSet(array $TagSet) 设置标签列表
 */
class CreateGlobalDomainRequest extends AbstractModel
{
    /**
     * @var integer 域名所属项目ID
     */
    public $ProjectId;

    /**
     * @var string 域名默认入口
     */
    public $DefaultValue;

    /**
     * @var string 别名
     */
    public $Alias;

    /**
     * @var array 标签列表
     */
    public $TagSet;

    /**
     * @param integer $ProjectId 域名所属项目ID
     * @param string $DefaultValue 域名默认入口
     * @param string $Alias 别名
     * @param array $TagSet 标签列表
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("DefaultValue",$param) and $param["DefaultValue"] !== null) {
            $this->DefaultValue = $param["DefaultValue"];
        }

        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }

        if (array_key_exists("TagSet",$param) and $param["TagSet"] !== null) {
            $this->TagSet = [];
            foreach ($param["TagSet"] as $key => $value){
                $obj = new TagPair();
                $obj->deserialize($value);
                array_push($this->TagSet, $obj);
            }
        }
    }
}
