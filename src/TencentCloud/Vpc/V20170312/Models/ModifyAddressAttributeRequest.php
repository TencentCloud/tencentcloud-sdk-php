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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAddressAttribute请求参数结构体
 *
 * @method string getAddressId() 获取标识 EIP 的唯一 ID。EIP 唯一 ID 形如：`eip-11112222`。可以使用[DescribeAddresses](https://cloud.tencent.com/document/product/215/16702)接口获取AddressId。
 * @method void setAddressId(string $AddressId) 设置标识 EIP 的唯一 ID。EIP 唯一 ID 形如：`eip-11112222`。可以使用[DescribeAddresses](https://cloud.tencent.com/document/product/215/16702)接口获取AddressId。
 * @method string getAddressName() 获取修改后的 EIP 名称。长度上限为128个字符，允许使用大小写字母、汉字、数字、连字符"-"和下划线"\_"，不能包含空格。
 * @method void setAddressName(string $AddressName) 设置修改后的 EIP 名称。长度上限为128个字符，允许使用大小写字母、汉字、数字、连字符"-"和下划线"\_"，不能包含空格。
 * @method string getEipDirectConnection() 获取设定EIP是否直通，"TRUE"表示直通，"FALSE"表示非直通。
注意：该参数仅对 EIP 直通功能可见的用户可以设定，EIP 必须为绑定状态，绑定的对象为 CVM 。
 * @method void setEipDirectConnection(string $EipDirectConnection) 设置设定EIP是否直通，"TRUE"表示直通，"FALSE"表示非直通。
注意：该参数仅对 EIP 直通功能可见的用户可以设定，EIP 必须为绑定状态，绑定的对象为 CVM 。
 */
class ModifyAddressAttributeRequest extends AbstractModel
{
    /**
     * @var string 标识 EIP 的唯一 ID。EIP 唯一 ID 形如：`eip-11112222`。可以使用[DescribeAddresses](https://cloud.tencent.com/document/product/215/16702)接口获取AddressId。
     */
    public $AddressId;

    /**
     * @var string 修改后的 EIP 名称。长度上限为128个字符，允许使用大小写字母、汉字、数字、连字符"-"和下划线"\_"，不能包含空格。
     */
    public $AddressName;

    /**
     * @var string 设定EIP是否直通，"TRUE"表示直通，"FALSE"表示非直通。
注意：该参数仅对 EIP 直通功能可见的用户可以设定，EIP 必须为绑定状态，绑定的对象为 CVM 。
     */
    public $EipDirectConnection;

    /**
     * @param string $AddressId 标识 EIP 的唯一 ID。EIP 唯一 ID 形如：`eip-11112222`。可以使用[DescribeAddresses](https://cloud.tencent.com/document/product/215/16702)接口获取AddressId。
     * @param string $AddressName 修改后的 EIP 名称。长度上限为128个字符，允许使用大小写字母、汉字、数字、连字符"-"和下划线"\_"，不能包含空格。
     * @param string $EipDirectConnection 设定EIP是否直通，"TRUE"表示直通，"FALSE"表示非直通。
注意：该参数仅对 EIP 直通功能可见的用户可以设定，EIP 必须为绑定状态，绑定的对象为 CVM 。
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
        if (array_key_exists("AddressId",$param) and $param["AddressId"] !== null) {
            $this->AddressId = $param["AddressId"];
        }

        if (array_key_exists("AddressName",$param) and $param["AddressName"] !== null) {
            $this->AddressName = $param["AddressName"];
        }

        if (array_key_exists("EipDirectConnection",$param) and $param["EipDirectConnection"] !== null) {
            $this->EipDirectConnection = $param["EipDirectConnection"];
        }
    }
}
