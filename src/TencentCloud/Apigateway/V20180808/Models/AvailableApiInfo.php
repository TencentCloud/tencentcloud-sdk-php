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
namespace TencentCloud\Apigateway\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 插件相关的API信息。
 *
 * @method string getApiId() 获取API ID。
 * @method void setApiId(string $ApiId) 设置API ID。
 * @method string getApiName() 获取API名称。
 * @method void setApiName(string $ApiName) 设置API名称。
 * @method string getApiType() 获取API类型。
 * @method void setApiType(string $ApiType) 设置API类型。
 * @method string getPath() 获取API路径。
 * @method void setPath(string $Path) 设置API路径。
 * @method string getMethod() 获取API方法。
 * @method void setMethod(string $Method) 设置API方法。
 * @method boolean getAttachedOtherPlugin() 获取API是否绑定其他插件。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAttachedOtherPlugin(boolean $AttachedOtherPlugin) 设置API是否绑定其他插件。
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsAttached() 获取API是否绑定当前插件。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsAttached(boolean $IsAttached) 设置API是否绑定当前插件。
注意：此字段可能返回 null，表示取不到有效值。
 */
class AvailableApiInfo extends AbstractModel
{
    /**
     * @var string API ID。
     */
    public $ApiId;

    /**
     * @var string API名称。
     */
    public $ApiName;

    /**
     * @var string API类型。
     */
    public $ApiType;

    /**
     * @var string API路径。
     */
    public $Path;

    /**
     * @var string API方法。
     */
    public $Method;

    /**
     * @var boolean API是否绑定其他插件。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AttachedOtherPlugin;

    /**
     * @var boolean API是否绑定当前插件。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsAttached;

    /**
     * @param string $ApiId API ID。
     * @param string $ApiName API名称。
     * @param string $ApiType API类型。
     * @param string $Path API路径。
     * @param string $Method API方法。
     * @param boolean $AttachedOtherPlugin API是否绑定其他插件。
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsAttached API是否绑定当前插件。
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("ApiId",$param) and $param["ApiId"] !== null) {
            $this->ApiId = $param["ApiId"];
        }

        if (array_key_exists("ApiName",$param) and $param["ApiName"] !== null) {
            $this->ApiName = $param["ApiName"];
        }

        if (array_key_exists("ApiType",$param) and $param["ApiType"] !== null) {
            $this->ApiType = $param["ApiType"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("AttachedOtherPlugin",$param) and $param["AttachedOtherPlugin"] !== null) {
            $this->AttachedOtherPlugin = $param["AttachedOtherPlugin"];
        }

        if (array_key_exists("IsAttached",$param) and $param["IsAttached"] !== null) {
            $this->IsAttached = $param["IsAttached"];
        }
    }
}
