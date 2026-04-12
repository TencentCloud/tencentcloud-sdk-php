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
namespace TencentCloud\Omics\V20221128\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 公共应用。
 *
 * @method string getApplicationId() 获取<p>应用ID。</p>
 * @method void setApplicationId(string $ApplicationId) 设置<p>应用ID。</p>
 * @method string getName() 获取<p>名称。</p>
 * @method void setName(string $Name) 设置<p>名称。</p>
 * @method string getType() 获取<p>类型。</p>
 * @method void setType(string $Type) 设置<p>类型。</p>
 * @method string getAppGroupType() 获取<p>应用标记</p><p>枚举值：</p><ul><li>SUB_APP： 子应用</li><li>APP_COLLECTION： 合集</li><li>STANDALONE_APP： 独立应用</li></ul>
 * @method void setAppGroupType(string $AppGroupType) 设置<p>应用标记</p><p>枚举值：</p><ul><li>SUB_APP： 子应用</li><li>APP_COLLECTION： 合集</li><li>STANDALONE_APP： 独立应用</li></ul>
 * @method array getNextflowVersion() 获取<p>Nextflow版本</p>
 * @method void setNextflowVersion(array $NextflowVersion) 设置<p>Nextflow版本</p>
 * @method array getAppTags() 获取<p>应用分类</p>
 * @method void setAppTags(array $AppTags) 设置<p>应用分类</p>
 * @method string getAppId() 获取<p>应用标识</p>
 * @method void setAppId(string $AppId) 设置<p>应用标识</p>
 */
class PublicApplication extends AbstractModel
{
    /**
     * @var string <p>应用ID。</p>
     */
    public $ApplicationId;

    /**
     * @var string <p>名称。</p>
     */
    public $Name;

    /**
     * @var string <p>类型。</p>
     */
    public $Type;

    /**
     * @var string <p>应用标记</p><p>枚举值：</p><ul><li>SUB_APP： 子应用</li><li>APP_COLLECTION： 合集</li><li>STANDALONE_APP： 独立应用</li></ul>
     */
    public $AppGroupType;

    /**
     * @var array <p>Nextflow版本</p>
     */
    public $NextflowVersion;

    /**
     * @var array <p>应用分类</p>
     */
    public $AppTags;

    /**
     * @var string <p>应用标识</p>
     */
    public $AppId;

    /**
     * @param string $ApplicationId <p>应用ID。</p>
     * @param string $Name <p>名称。</p>
     * @param string $Type <p>类型。</p>
     * @param string $AppGroupType <p>应用标记</p><p>枚举值：</p><ul><li>SUB_APP： 子应用</li><li>APP_COLLECTION： 合集</li><li>STANDALONE_APP： 独立应用</li></ul>
     * @param array $NextflowVersion <p>Nextflow版本</p>
     * @param array $AppTags <p>应用分类</p>
     * @param string $AppId <p>应用标识</p>
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
        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("AppGroupType",$param) and $param["AppGroupType"] !== null) {
            $this->AppGroupType = $param["AppGroupType"];
        }

        if (array_key_exists("NextflowVersion",$param) and $param["NextflowVersion"] !== null) {
            $this->NextflowVersion = $param["NextflowVersion"];
        }

        if (array_key_exists("AppTags",$param) and $param["AppTags"] !== null) {
            $this->AppTags = [];
            foreach ($param["AppTags"] as $key => $value){
                $obj = new ToolRepoTag();
                $obj->deserialize($value);
                array_push($this->AppTags, $obj);
            }
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }
    }
}
