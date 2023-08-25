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
 * ModifyApiAnalyzeStatus返回参数结构体
 *
 * @method integer getCount() 获取已经开启的数量,如果返回值为3（大于支持的域名开启数量），则表示开启失败
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCount(integer $Count) 设置已经开启的数量,如果返回值为3（大于支持的域名开启数量），则表示开启失败
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getUnSupportedList() 获取不支持开启的域名列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUnSupportedList(array $UnSupportedList) 设置不支持开启的域名列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getFailDomainList() 获取开启/关闭失败的域名列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFailDomainList(array $FailDomainList) 设置开启/关闭失败的域名列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class ModifyApiAnalyzeStatusResponse extends AbstractModel
{
    /**
     * @var integer 已经开启的数量,如果返回值为3（大于支持的域名开启数量），则表示开启失败
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Count;

    /**
     * @var array 不支持开启的域名列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UnSupportedList;

    /**
     * @var array 开启/关闭失败的域名列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FailDomainList;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Count 已经开启的数量,如果返回值为3（大于支持的域名开启数量），则表示开启失败
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $UnSupportedList 不支持开启的域名列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $FailDomainList 开启/关闭失败的域名列表
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
        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("UnSupportedList",$param) and $param["UnSupportedList"] !== null) {
            $this->UnSupportedList = $param["UnSupportedList"];
        }

        if (array_key_exists("FailDomainList",$param) and $param["FailDomainList"] !== null) {
            $this->FailDomainList = $param["FailDomainList"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
