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
 * @method string getAddressId() 获取<p>标识 EIP 的唯一 ID。EIP 唯一 ID 形如：<code>eip-11112222</code>。可以使用<a href="https://cloud.tencent.com/document/product/215/16702">DescribeAddresses</a>接口获取AddressId。</p>
 * @method void setAddressId(string $AddressId) 设置<p>标识 EIP 的唯一 ID。EIP 唯一 ID 形如：<code>eip-11112222</code>。可以使用<a href="https://cloud.tencent.com/document/product/215/16702">DescribeAddresses</a>接口获取AddressId。</p>
 * @method string getAddressName() 获取<p>修改后的 EIP 名称。长度上限为128个字符，允许使用大小写字母、汉字、数字、连字符&quot;-&quot;和下划线&quot;_&quot;，不能包含空格。</p>
 * @method void setAddressName(string $AddressName) 设置<p>修改后的 EIP 名称。长度上限为128个字符，允许使用大小写字母、汉字、数字、连字符&quot;-&quot;和下划线&quot;_&quot;，不能包含空格。</p>
 * @method string getEipDirectConnection() 获取<p>设定EIP是否直通，&quot;TRUE&quot;表示直通，&quot;FALSE&quot;表示非直通。<br>注意：该参数仅对 EIP 直通功能可见的用户可以设定，EIP 必须为绑定状态，绑定的对象为 CVM 。</p>
 * @method void setEipDirectConnection(string $EipDirectConnection) 设置<p>设定EIP是否直通，&quot;TRUE&quot;表示直通，&quot;FALSE&quot;表示非直通。<br>注意：该参数仅对 EIP 直通功能可见的用户可以设定，EIP 必须为绑定状态，绑定的对象为 CVM 。</p>
 * @method boolean getEipVisibleOnEni() 获取<p>设定EIP是否在网卡可见</p>
 * @method void setEipVisibleOnEni(boolean $EipVisibleOnEni) 设置<p>设定EIP是否在网卡可见</p>
 */
class ModifyAddressAttributeRequest extends AbstractModel
{
    /**
     * @var string <p>标识 EIP 的唯一 ID。EIP 唯一 ID 形如：<code>eip-11112222</code>。可以使用<a href="https://cloud.tencent.com/document/product/215/16702">DescribeAddresses</a>接口获取AddressId。</p>
     */
    public $AddressId;

    /**
     * @var string <p>修改后的 EIP 名称。长度上限为128个字符，允许使用大小写字母、汉字、数字、连字符&quot;-&quot;和下划线&quot;_&quot;，不能包含空格。</p>
     */
    public $AddressName;

    /**
     * @var string <p>设定EIP是否直通，&quot;TRUE&quot;表示直通，&quot;FALSE&quot;表示非直通。<br>注意：该参数仅对 EIP 直通功能可见的用户可以设定，EIP 必须为绑定状态，绑定的对象为 CVM 。</p>
     */
    public $EipDirectConnection;

    /**
     * @var boolean <p>设定EIP是否在网卡可见</p>
     */
    public $EipVisibleOnEni;

    /**
     * @param string $AddressId <p>标识 EIP 的唯一 ID。EIP 唯一 ID 形如：<code>eip-11112222</code>。可以使用<a href="https://cloud.tencent.com/document/product/215/16702">DescribeAddresses</a>接口获取AddressId。</p>
     * @param string $AddressName <p>修改后的 EIP 名称。长度上限为128个字符，允许使用大小写字母、汉字、数字、连字符&quot;-&quot;和下划线&quot;_&quot;，不能包含空格。</p>
     * @param string $EipDirectConnection <p>设定EIP是否直通，&quot;TRUE&quot;表示直通，&quot;FALSE&quot;表示非直通。<br>注意：该参数仅对 EIP 直通功能可见的用户可以设定，EIP 必须为绑定状态，绑定的对象为 CVM 。</p>
     * @param boolean $EipVisibleOnEni <p>设定EIP是否在网卡可见</p>
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

        if (array_key_exists("EipVisibleOnEni",$param) and $param["EipVisibleOnEni"] !== null) {
            $this->EipVisibleOnEni = $param["EipVisibleOnEni"];
        }
    }
}
