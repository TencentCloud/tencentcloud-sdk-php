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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 源站组记录
 *
 * @method string getRecord() 获取记录值
 * @method void setRecord(string $Record) 设置记录值
 * @method array getArea() 获取当源站配置类型Type=area时，表示区域
为空表示默认区域
 * @method void setArea(array $Area) 设置当源站配置类型Type=area时，表示区域
为空表示默认区域
 * @method integer getWeight() 获取当源站配置类型Type=weight时，表示权重
取值范围为[1-100]
源站组内多个源站权重总和应为100。
当源站配置类型Type=proto，表示权重
取值范围为[1-100]
源站组内Proto相同的多个源站权重总和应为100。
 * @method void setWeight(integer $Weight) 设置当源站配置类型Type=weight时，表示权重
取值范围为[1-100]
源站组内多个源站权重总和应为100。
当源站配置类型Type=proto，表示权重
取值范围为[1-100]
源站组内Proto相同的多个源站权重总和应为100。
 * @method integer getPort() 获取端口
 * @method void setPort(integer $Port) 设置端口
 * @method string getRecordId() 获取记录ID
 * @method void setRecordId(string $RecordId) 设置记录ID
 * @method boolean getPrivate() 获取是否私有鉴权
当源站类型OriginType=third_part时有效
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPrivate(boolean $Private) 设置是否私有鉴权
当源站类型OriginType=third_part时有效
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPrivateParameter() 获取私有鉴权参数
当源站类型Private=true时有效
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPrivateParameter(array $PrivateParameter) 设置私有鉴权参数
当源站类型Private=true时有效
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProto() 获取当源站配置类型Type=proto时，表示客户端请求协议，取值：http/https
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProto(string $Proto) 设置当源站配置类型Type=proto时，表示客户端请求协议，取值：http/https
注意：此字段可能返回 null，表示取不到有效值。
 */
class OriginRecord extends AbstractModel
{
    /**
     * @var string 记录值
     */
    public $Record;

    /**
     * @var array 当源站配置类型Type=area时，表示区域
为空表示默认区域
     */
    public $Area;

    /**
     * @var integer 当源站配置类型Type=weight时，表示权重
取值范围为[1-100]
源站组内多个源站权重总和应为100。
当源站配置类型Type=proto，表示权重
取值范围为[1-100]
源站组内Proto相同的多个源站权重总和应为100。
     */
    public $Weight;

    /**
     * @var integer 端口
     */
    public $Port;

    /**
     * @var string 记录ID
     */
    public $RecordId;

    /**
     * @var boolean 是否私有鉴权
当源站类型OriginType=third_part时有效
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Private;

    /**
     * @var array 私有鉴权参数
当源站类型Private=true时有效
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PrivateParameter;

    /**
     * @var string 当源站配置类型Type=proto时，表示客户端请求协议，取值：http/https
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Proto;

    /**
     * @param string $Record 记录值
     * @param array $Area 当源站配置类型Type=area时，表示区域
为空表示默认区域
     * @param integer $Weight 当源站配置类型Type=weight时，表示权重
取值范围为[1-100]
源站组内多个源站权重总和应为100。
当源站配置类型Type=proto，表示权重
取值范围为[1-100]
源站组内Proto相同的多个源站权重总和应为100。
     * @param integer $Port 端口
     * @param string $RecordId 记录ID
     * @param boolean $Private 是否私有鉴权
当源站类型OriginType=third_part时有效
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $PrivateParameter 私有鉴权参数
当源站类型Private=true时有效
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Proto 当源站配置类型Type=proto时，表示客户端请求协议，取值：http/https
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
        if (array_key_exists("Record",$param) and $param["Record"] !== null) {
            $this->Record = $param["Record"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("RecordId",$param) and $param["RecordId"] !== null) {
            $this->RecordId = $param["RecordId"];
        }

        if (array_key_exists("Private",$param) and $param["Private"] !== null) {
            $this->Private = $param["Private"];
        }

        if (array_key_exists("PrivateParameter",$param) and $param["PrivateParameter"] !== null) {
            $this->PrivateParameter = [];
            foreach ($param["PrivateParameter"] as $key => $value){
                $obj = new OriginRecordPrivateParameter();
                $obj->deserialize($value);
                array_push($this->PrivateParameter, $obj);
            }
        }

        if (array_key_exists("Proto",$param) and $param["Proto"] !== null) {
            $this->Proto = $param["Proto"];
        }
    }
}
