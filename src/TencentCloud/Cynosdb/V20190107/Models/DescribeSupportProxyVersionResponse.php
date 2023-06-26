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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSupportProxyVersion返回参数结构体
 *
 * @method array getSupportProxyVersions() 获取支持的数据库代理版本集合
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSupportProxyVersions(array $SupportProxyVersions) 设置支持的数据库代理版本集合
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCurrentProxyVersion() 获取当前proxy版本号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCurrentProxyVersion(string $CurrentProxyVersion) 设置当前proxy版本号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeSupportProxyVersionResponse extends AbstractModel
{
    /**
     * @var array 支持的数据库代理版本集合
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SupportProxyVersions;

    /**
     * @var string 当前proxy版本号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CurrentProxyVersion;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $SupportProxyVersions 支持的数据库代理版本集合
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CurrentProxyVersion 当前proxy版本号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("SupportProxyVersions",$param) and $param["SupportProxyVersions"] !== null) {
            $this->SupportProxyVersions = $param["SupportProxyVersions"];
        }

        if (array_key_exists("CurrentProxyVersion",$param) and $param["CurrentProxyVersion"] !== null) {
            $this->CurrentProxyVersion = $param["CurrentProxyVersion"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
