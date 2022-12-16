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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 水印防护配置
 *
 * @method integer getOffset() 获取水印偏移量，取值范围[0, 100)
 * @method void setOffset(integer $Offset) 设置水印偏移量，取值范围[0, 100)
 * @method integer getOpenStatus() 获取是否开启，取值[
0（手动开启）
1（立即运行）
]
 * @method void setOpenStatus(integer $OpenStatus) 设置是否开启，取值[
0（手动开启）
1（立即运行）
]
 * @method array getListeners() 获取水印所属的转发监听器列表
 * @method void setListeners(array $Listeners) 设置水印所属的转发监听器列表
 * @method array getKeys() 获取水印添加成功后生成的水印密钥列表，一条水印最少1个密钥，最多2个密钥
 * @method void setKeys(array $Keys) 设置水印添加成功后生成的水印密钥列表，一条水印最少1个密钥，最多2个密钥
 * @method string getVerify() 获取水印检查模式, 取值[
checkall（普通模式）
shortfpcheckall（精简模式）
]
 * @method void setVerify(string $Verify) 设置水印检查模式, 取值[
checkall（普通模式）
shortfpcheckall（精简模式）
]
 * @method integer getCloudSdkProxy() 获取是否开启代理，1开启则忽略IP+端口校验；0关闭则需要IP+端口校验
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCloudSdkProxy(integer $CloudSdkProxy) 设置是否开启代理，1开启则忽略IP+端口校验；0关闭则需要IP+端口校验
注意：此字段可能返回 null，表示取不到有效值。
 */
class WaterPrintConfig extends AbstractModel
{
    /**
     * @var integer 水印偏移量，取值范围[0, 100)
     */
    public $Offset;

    /**
     * @var integer 是否开启，取值[
0（手动开启）
1（立即运行）
]
     */
    public $OpenStatus;

    /**
     * @var array 水印所属的转发监听器列表
     */
    public $Listeners;

    /**
     * @var array 水印添加成功后生成的水印密钥列表，一条水印最少1个密钥，最多2个密钥
     */
    public $Keys;

    /**
     * @var string 水印检查模式, 取值[
checkall（普通模式）
shortfpcheckall（精简模式）
]
     */
    public $Verify;

    /**
     * @var integer 是否开启代理，1开启则忽略IP+端口校验；0关闭则需要IP+端口校验
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CloudSdkProxy;

    /**
     * @param integer $Offset 水印偏移量，取值范围[0, 100)
     * @param integer $OpenStatus 是否开启，取值[
0（手动开启）
1（立即运行）
]
     * @param array $Listeners 水印所属的转发监听器列表
     * @param array $Keys 水印添加成功后生成的水印密钥列表，一条水印最少1个密钥，最多2个密钥
     * @param string $Verify 水印检查模式, 取值[
checkall（普通模式）
shortfpcheckall（精简模式）
]
     * @param integer $CloudSdkProxy 是否开启代理，1开启则忽略IP+端口校验；0关闭则需要IP+端口校验
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("OpenStatus",$param) and $param["OpenStatus"] !== null) {
            $this->OpenStatus = $param["OpenStatus"];
        }

        if (array_key_exists("Listeners",$param) and $param["Listeners"] !== null) {
            $this->Listeners = [];
            foreach ($param["Listeners"] as $key => $value){
                $obj = new ForwardListener();
                $obj->deserialize($value);
                array_push($this->Listeners, $obj);
            }
        }

        if (array_key_exists("Keys",$param) and $param["Keys"] !== null) {
            $this->Keys = [];
            foreach ($param["Keys"] as $key => $value){
                $obj = new WaterPrintKey();
                $obj->deserialize($value);
                array_push($this->Keys, $obj);
            }
        }

        if (array_key_exists("Verify",$param) and $param["Verify"] !== null) {
            $this->Verify = $param["Verify"];
        }

        if (array_key_exists("CloudSdkProxy",$param) and $param["CloudSdkProxy"] !== null) {
            $this->CloudSdkProxy = $param["CloudSdkProxy"];
        }
    }
}
