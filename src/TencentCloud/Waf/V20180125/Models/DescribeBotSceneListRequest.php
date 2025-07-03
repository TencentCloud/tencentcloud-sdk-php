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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBotSceneList请求参数结构体
 *
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method integer getLimit() 获取每页数量
 * @method void setLimit(integer $Limit) 设置每页数量
 * @method integer getOffset() 获取页码
 * @method void setOffset(integer $Offset) 设置页码
 * @method array getBusinessType() 获取场景模板类型，通过此下拉字段进行场景筛选。全部: all 登录: login  秒杀:seckill  爬内容：crawl 自定义: custom
 * @method void setBusinessType(array $BusinessType) 设置场景模板类型，通过此下拉字段进行场景筛选。全部: all 登录: login  秒杀:seckill  爬内容：crawl 自定义: custom
 * @method string getSceneName() 获取通过场景名称模糊搜索
 * @method void setSceneName(string $SceneName) 设置通过场景名称模糊搜索
 * @method boolean getIsDefault() 获取是否只显示默认场景
 * @method void setIsDefault(boolean $IsDefault) 设置是否只显示默认场景
 * @method boolean getIsValid() 获取是否仅显示生效场景
 * @method void setIsValid(boolean $IsValid) 设置是否仅显示生效场景
 * @method string getSceneId() 获取要查询的场景id
 * @method void setSceneId(string $SceneId) 设置要查询的场景id
 */
class DescribeBotSceneListRequest extends AbstractModel
{
    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @var integer 每页数量
     */
    public $Limit;

    /**
     * @var integer 页码
     */
    public $Offset;

    /**
     * @var array 场景模板类型，通过此下拉字段进行场景筛选。全部: all 登录: login  秒杀:seckill  爬内容：crawl 自定义: custom
     */
    public $BusinessType;

    /**
     * @var string 通过场景名称模糊搜索
     */
    public $SceneName;

    /**
     * @var boolean 是否只显示默认场景
     */
    public $IsDefault;

    /**
     * @var boolean 是否仅显示生效场景
     */
    public $IsValid;

    /**
     * @var string 要查询的场景id
     */
    public $SceneId;

    /**
     * @param string $Domain 域名
     * @param integer $Limit 每页数量
     * @param integer $Offset 页码
     * @param array $BusinessType 场景模板类型，通过此下拉字段进行场景筛选。全部: all 登录: login  秒杀:seckill  爬内容：crawl 自定义: custom
     * @param string $SceneName 通过场景名称模糊搜索
     * @param boolean $IsDefault 是否只显示默认场景
     * @param boolean $IsValid 是否仅显示生效场景
     * @param string $SceneId 要查询的场景id
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("BusinessType",$param) and $param["BusinessType"] !== null) {
            $this->BusinessType = $param["BusinessType"];
        }

        if (array_key_exists("SceneName",$param) and $param["SceneName"] !== null) {
            $this->SceneName = $param["SceneName"];
        }

        if (array_key_exists("IsDefault",$param) and $param["IsDefault"] !== null) {
            $this->IsDefault = $param["IsDefault"];
        }

        if (array_key_exists("IsValid",$param) and $param["IsValid"] !== null) {
            $this->IsValid = $param["IsValid"];
        }

        if (array_key_exists("SceneId",$param) and $param["SceneId"] !== null) {
            $this->SceneId = $param["SceneId"];
        }
    }
}
