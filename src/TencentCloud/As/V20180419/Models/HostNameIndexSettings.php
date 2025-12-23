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
namespace TencentCloud\As\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例主机名称序号相关设置。
 *
 * @method boolean getEnabled() 获取<p>是否开启实例主机名创建序号，默认不开启。取值范围：</p><p>TRUE：表示开启实例主机名创建序号FALSE：表示不开启实例主机名创建序号</p>
 * @method void setEnabled(boolean $Enabled) 设置<p>是否开启实例主机名创建序号，默认不开启。取值范围：</p><p>TRUE：表示开启实例主机名创建序号FALSE：表示不开启实例主机名创建序号</p>
 * @method integer getBeginIndex() 获取<p>初始序号。取值范围与 IndexLength 参数有关：- IndexLength 为 0 时，取值范围为 [0, 99999999]。- IndexLength 为 [1, 8] 时，取值范围为 [0, 10^IndexLength-1]，最大值即为指定位数的最大数字。初始序号默认值如下：- 首次启用递增序号：初始序号默认值为 0 （ 展示位数与 IndexLength 有关，例如 IndexLength 为  4，展示值为 0000）- 非首次开启递增序号：顺延之前的递增序号，例如上次使用递增至序号 069，则新的初始序号默认值为 070。注意：修改初始序号可能会造成伸缩组内序号重复。</p>
 * @method void setBeginIndex(integer $BeginIndex) 设置<p>初始序号。取值范围与 IndexLength 参数有关：- IndexLength 为 0 时，取值范围为 [0, 99999999]。- IndexLength 为 [1, 8] 时，取值范围为 [0, 10^IndexLength-1]，最大值即为指定位数的最大数字。初始序号默认值如下：- 首次启用递增序号：初始序号默认值为 0 （ 展示位数与 IndexLength 有关，例如 IndexLength 为  4，展示值为 0000）- 非首次开启递增序号：顺延之前的递增序号，例如上次使用递增至序号 069，则新的初始序号默认值为 070。注意：修改初始序号可能会造成伸缩组内序号重复。</p>
 * @method integer getIndexLength() 获取<p>递增序号长度，默认为0，表示不指定序号长度。 取值范围：0-8，最大为整数8。 - 长度设置为3，序号展示形式为：000、001、002 ... 010、011 ... 100 ... 999，序号上限为999- 长度设置为0，序号展示形式为：0、1、2 ... 10、11 ... 100 ... 1000 ...10000 ... 99999999，序号上限为99999999注意：递增序号持续超出上限会导致扩容失败，请不要设置过小的递增序号长度。</p>
 * @method void setIndexLength(integer $IndexLength) 设置<p>递增序号长度，默认为0，表示不指定序号长度。 取值范围：0-8，最大为整数8。 - 长度设置为3，序号展示形式为：000、001、002 ... 010、011 ... 100 ... 999，序号上限为999- 长度设置为0，序号展示形式为：0、1、2 ... 10、11 ... 100 ... 1000 ...10000 ... 99999999，序号上限为99999999注意：递增序号持续超出上限会导致扩容失败，请不要设置过小的递增序号长度。</p>
 */
class HostNameIndexSettings extends AbstractModel
{
    /**
     * @var boolean <p>是否开启实例主机名创建序号，默认不开启。取值范围：</p><p>TRUE：表示开启实例主机名创建序号FALSE：表示不开启实例主机名创建序号</p>
     */
    public $Enabled;

    /**
     * @var integer <p>初始序号。取值范围与 IndexLength 参数有关：- IndexLength 为 0 时，取值范围为 [0, 99999999]。- IndexLength 为 [1, 8] 时，取值范围为 [0, 10^IndexLength-1]，最大值即为指定位数的最大数字。初始序号默认值如下：- 首次启用递增序号：初始序号默认值为 0 （ 展示位数与 IndexLength 有关，例如 IndexLength 为  4，展示值为 0000）- 非首次开启递增序号：顺延之前的递增序号，例如上次使用递增至序号 069，则新的初始序号默认值为 070。注意：修改初始序号可能会造成伸缩组内序号重复。</p>
     */
    public $BeginIndex;

    /**
     * @var integer <p>递增序号长度，默认为0，表示不指定序号长度。 取值范围：0-8，最大为整数8。 - 长度设置为3，序号展示形式为：000、001、002 ... 010、011 ... 100 ... 999，序号上限为999- 长度设置为0，序号展示形式为：0、1、2 ... 10、11 ... 100 ... 1000 ...10000 ... 99999999，序号上限为99999999注意：递增序号持续超出上限会导致扩容失败，请不要设置过小的递增序号长度。</p>
     */
    public $IndexLength;

    /**
     * @param boolean $Enabled <p>是否开启实例主机名创建序号，默认不开启。取值范围：</p><p>TRUE：表示开启实例主机名创建序号FALSE：表示不开启实例主机名创建序号</p>
     * @param integer $BeginIndex <p>初始序号。取值范围与 IndexLength 参数有关：- IndexLength 为 0 时，取值范围为 [0, 99999999]。- IndexLength 为 [1, 8] 时，取值范围为 [0, 10^IndexLength-1]，最大值即为指定位数的最大数字。初始序号默认值如下：- 首次启用递增序号：初始序号默认值为 0 （ 展示位数与 IndexLength 有关，例如 IndexLength 为  4，展示值为 0000）- 非首次开启递增序号：顺延之前的递增序号，例如上次使用递增至序号 069，则新的初始序号默认值为 070。注意：修改初始序号可能会造成伸缩组内序号重复。</p>
     * @param integer $IndexLength <p>递增序号长度，默认为0，表示不指定序号长度。 取值范围：0-8，最大为整数8。 - 长度设置为3，序号展示形式为：000、001、002 ... 010、011 ... 100 ... 999，序号上限为999- 长度设置为0，序号展示形式为：0、1、2 ... 10、11 ... 100 ... 1000 ...10000 ... 99999999，序号上限为99999999注意：递增序号持续超出上限会导致扩容失败，请不要设置过小的递增序号长度。</p>
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
        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("BeginIndex",$param) and $param["BeginIndex"] !== null) {
            $this->BeginIndex = $param["BeginIndex"];
        }

        if (array_key_exists("IndexLength",$param) and $param["IndexLength"] !== null) {
            $this->IndexLength = $param["IndexLength"];
        }
    }
}
