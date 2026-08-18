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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 资源用量聚合明细
 *
 * @method ModelUsageSummary getModel() 获取<p>MODEL 域专属</p>
 * @method void setModel(ModelUsageSummary $Model) 设置<p>MODEL 域专属</p>
 * @method PlatformUsageSummary getPlatform() 获取<p>PLATFORM 域专属</p>
 * @method void setPlatform(PlatformUsageSummary $Platform) 设置<p>PLATFORM 域专属</p>
 * @method PluginUsageSummary getPlugin() 获取<p>PLUGIN 域专属</p>
 * @method void setPlugin(PluginUsageSummary $Plugin) 设置<p>PLUGIN 域专属</p>
 * @method string getSourceId() 获取<p>来源 ID；CORP 视图=space_id（企业视图按 space 分组），SPACE 视图=app_id（uint64 字符串），APP 视图=app_id</p>
 * @method void setSourceId(string $SourceId) 设置<p>来源 ID；CORP 视图=space_id（企业视图按 space 分组），SPACE 视图=app_id（uint64 字符串），APP 视图=app_id</p>
 * @method string getSourceName() 获取<p>来源名称；CORP 视图=space_name，SPACE 视图=app_name，APP 视图=app_name</p>
 * @method void setSourceName(string $SourceName) 设置<p>来源名称；CORP 视图=space_name，SPACE 视图=app_name，APP 视图=app_name</p>
 * @method integer getViewType() 获取<p>视图类型，决定 SourceId/SourceName 的业务含义</p><table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>VIEW_TYPE_UNSPECIFIED</td><td>0</td><td>未指定（无效值，请求勿传）</td></tr><tr><td>VIEW_TYPE_CORP</td><td>1</td><td>企业视图</td></tr><tr><td>VIEW_TYPE_SPACE</td><td>2</td><td>空间视图</td></tr><tr><td>VIEW_TYPE_APP</td><td>3</td><td>应用视图</td></tr></tbody></table>
 * @method void setViewType(integer $ViewType) 设置<p>视图类型，决定 SourceId/SourceName 的业务含义</p><table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>VIEW_TYPE_UNSPECIFIED</td><td>0</td><td>未指定（无效值，请求勿传）</td></tr><tr><td>VIEW_TYPE_CORP</td><td>1</td><td>企业视图</td></tr><tr><td>VIEW_TYPE_SPACE</td><td>2</td><td>空间视图</td></tr><tr><td>VIEW_TYPE_APP</td><td>3</td><td>应用视图</td></tr></tbody></table>
 */
class UsageSummary extends AbstractModel
{
    /**
     * @var ModelUsageSummary <p>MODEL 域专属</p>
     */
    public $Model;

    /**
     * @var PlatformUsageSummary <p>PLATFORM 域专属</p>
     */
    public $Platform;

    /**
     * @var PluginUsageSummary <p>PLUGIN 域专属</p>
     */
    public $Plugin;

    /**
     * @var string <p>来源 ID；CORP 视图=space_id（企业视图按 space 分组），SPACE 视图=app_id（uint64 字符串），APP 视图=app_id</p>
     */
    public $SourceId;

    /**
     * @var string <p>来源名称；CORP 视图=space_name，SPACE 视图=app_name，APP 视图=app_name</p>
     */
    public $SourceName;

    /**
     * @var integer <p>视图类型，决定 SourceId/SourceName 的业务含义</p><table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>VIEW_TYPE_UNSPECIFIED</td><td>0</td><td>未指定（无效值，请求勿传）</td></tr><tr><td>VIEW_TYPE_CORP</td><td>1</td><td>企业视图</td></tr><tr><td>VIEW_TYPE_SPACE</td><td>2</td><td>空间视图</td></tr><tr><td>VIEW_TYPE_APP</td><td>3</td><td>应用视图</td></tr></tbody></table>
     */
    public $ViewType;

    /**
     * @param ModelUsageSummary $Model <p>MODEL 域专属</p>
     * @param PlatformUsageSummary $Platform <p>PLATFORM 域专属</p>
     * @param PluginUsageSummary $Plugin <p>PLUGIN 域专属</p>
     * @param string $SourceId <p>来源 ID；CORP 视图=space_id（企业视图按 space 分组），SPACE 视图=app_id（uint64 字符串），APP 视图=app_id</p>
     * @param string $SourceName <p>来源名称；CORP 视图=space_name，SPACE 视图=app_name，APP 视图=app_name</p>
     * @param integer $ViewType <p>视图类型，决定 SourceId/SourceName 的业务含义</p><table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>VIEW_TYPE_UNSPECIFIED</td><td>0</td><td>未指定（无效值，请求勿传）</td></tr><tr><td>VIEW_TYPE_CORP</td><td>1</td><td>企业视图</td></tr><tr><td>VIEW_TYPE_SPACE</td><td>2</td><td>空间视图</td></tr><tr><td>VIEW_TYPE_APP</td><td>3</td><td>应用视图</td></tr></tbody></table>
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
        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = new ModelUsageSummary();
            $this->Model->deserialize($param["Model"]);
        }

        if (array_key_exists("Platform",$param) and $param["Platform"] !== null) {
            $this->Platform = new PlatformUsageSummary();
            $this->Platform->deserialize($param["Platform"]);
        }

        if (array_key_exists("Plugin",$param) and $param["Plugin"] !== null) {
            $this->Plugin = new PluginUsageSummary();
            $this->Plugin->deserialize($param["Plugin"]);
        }

        if (array_key_exists("SourceId",$param) and $param["SourceId"] !== null) {
            $this->SourceId = $param["SourceId"];
        }

        if (array_key_exists("SourceName",$param) and $param["SourceName"] !== null) {
            $this->SourceName = $param["SourceName"];
        }

        if (array_key_exists("ViewType",$param) and $param["ViewType"] !== null) {
            $this->ViewType = $param["ViewType"];
        }
    }
}
