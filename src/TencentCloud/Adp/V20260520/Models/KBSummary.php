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
 * 知识库摘要信息
 *
 * @method array getAppList() 获取<p>关联的应用列表，仅共享知识库返回</p>
 * @method void setAppList(array $AppList) 设置<p>关联的应用列表，仅共享知识库返回</p>
 * @method string getCreateTime() 获取<p>创建时间（Unix 秒）</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间（Unix 秒）</p>
 * @method Operator getCreator() 获取<p>创建人</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreator(Operator $Creator) 设置<p>创建人</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取<p>描述</p>
 * @method void setDescription(string $Description) 设置<p>描述</p>
 * @method integer getDocCount() 获取<p>文档数</p>
 * @method void setDocCount(integer $DocCount) 设置<p>文档数</p>
 * @method boolean getIsExceeded() 获取<p>是否超量</p>
 * @method void setIsExceeded(boolean $IsExceeded) 设置<p>是否超量</p>
 * @method string getKbId() 获取<p>知识库 ID</p>
 * @method void setKbId(string $KbId) 设置<p>知识库 ID</p>
 * @method integer getKbType() 获取<p>类型：1=默认知识库，2=共享知识库<table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>KB_TYPE_UNKNOWN</td><td>0</td><td></td></tr><tr><td>KB_TYPE_DEFAULT</td><td>1</td><td>默认知识库</td></tr><tr><td>KB_TYPE_SHARED</td><td>2</td><td>共享知识库</td></tr></tbody></table></p>
 * @method void setKbType(integer $KbType) 设置<p>类型：1=默认知识库，2=共享知识库<table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>KB_TYPE_UNKNOWN</td><td>0</td><td></td></tr><tr><td>KB_TYPE_DEFAULT</td><td>1</td><td>默认知识库</td></tr><tr><td>KB_TYPE_SHARED</td><td>2</td><td>共享知识库</td></tr></tbody></table></p>
 * @method Operator getLatestOperator() 获取<p>最后操作人，仅共享知识库返回</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLatestOperator(Operator $LatestOperator) 设置<p>最后操作人，仅共享知识库返回</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取<p>知识库名称</p>
 * @method void setName(string $Name) 设置<p>知识库名称</p>
 * @method KBPermission getPermission() 获取<p>操作权限</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPermission(KBPermission $Permission) 设置<p>操作权限</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getProcessingFlagList() 获取<p>处理中状态列表</p>
 * @method void setProcessingFlagList(array $ProcessingFlagList) 设置<p>处理中状态列表</p>
 * @method integer getSharedSubType() 获取<p>共享子类型：1=普通，2=公众号<table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>SHARED_KB_SUB_TYPE_UNKNOWN</td><td>0</td><td></td></tr><tr><td>SHARED_KB_SUB_TYPE_NORMAL</td><td>1</td><td>普通</td></tr><tr><td>SHARED_KB_SUB_TYPE_PUBLIC_ACCOUNT</td><td>2</td><td>公众号</td></tr></tbody></table></p>
 * @method void setSharedSubType(integer $SharedSubType) 设置<p>共享子类型：1=普通，2=公众号<table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>SHARED_KB_SUB_TYPE_UNKNOWN</td><td>0</td><td></td></tr><tr><td>SHARED_KB_SUB_TYPE_NORMAL</td><td>1</td><td>普通</td></tr><tr><td>SHARED_KB_SUB_TYPE_PUBLIC_ACCOUNT</td><td>2</td><td>公众号</td></tr></tbody></table></p>
 * @method string getUpdateTime() 获取<p>更新时间（Unix 秒）</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>更新时间（Unix 秒）</p>
 */
class KBSummary extends AbstractModel
{
    /**
     * @var array <p>关联的应用列表，仅共享知识库返回</p>
     */
    public $AppList;

    /**
     * @var string <p>创建时间（Unix 秒）</p>
     */
    public $CreateTime;

    /**
     * @var Operator <p>创建人</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Creator;

    /**
     * @var string <p>描述</p>
     */
    public $Description;

    /**
     * @var integer <p>文档数</p>
     */
    public $DocCount;

    /**
     * @var boolean <p>是否超量</p>
     */
    public $IsExceeded;

    /**
     * @var string <p>知识库 ID</p>
     */
    public $KbId;

    /**
     * @var integer <p>类型：1=默认知识库，2=共享知识库<table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>KB_TYPE_UNKNOWN</td><td>0</td><td></td></tr><tr><td>KB_TYPE_DEFAULT</td><td>1</td><td>默认知识库</td></tr><tr><td>KB_TYPE_SHARED</td><td>2</td><td>共享知识库</td></tr></tbody></table></p>
     */
    public $KbType;

    /**
     * @var Operator <p>最后操作人，仅共享知识库返回</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LatestOperator;

    /**
     * @var string <p>知识库名称</p>
     */
    public $Name;

    /**
     * @var KBPermission <p>操作权限</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Permission;

    /**
     * @var array <p>处理中状态列表</p>
     */
    public $ProcessingFlagList;

    /**
     * @var integer <p>共享子类型：1=普通，2=公众号<table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>SHARED_KB_SUB_TYPE_UNKNOWN</td><td>0</td><td></td></tr><tr><td>SHARED_KB_SUB_TYPE_NORMAL</td><td>1</td><td>普通</td></tr><tr><td>SHARED_KB_SUB_TYPE_PUBLIC_ACCOUNT</td><td>2</td><td>公众号</td></tr></tbody></table></p>
     */
    public $SharedSubType;

    /**
     * @var string <p>更新时间（Unix 秒）</p>
     */
    public $UpdateTime;

    /**
     * @param array $AppList <p>关联的应用列表，仅共享知识库返回</p>
     * @param string $CreateTime <p>创建时间（Unix 秒）</p>
     * @param Operator $Creator <p>创建人</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description <p>描述</p>
     * @param integer $DocCount <p>文档数</p>
     * @param boolean $IsExceeded <p>是否超量</p>
     * @param string $KbId <p>知识库 ID</p>
     * @param integer $KbType <p>类型：1=默认知识库，2=共享知识库<table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>KB_TYPE_UNKNOWN</td><td>0</td><td></td></tr><tr><td>KB_TYPE_DEFAULT</td><td>1</td><td>默认知识库</td></tr><tr><td>KB_TYPE_SHARED</td><td>2</td><td>共享知识库</td></tr></tbody></table></p>
     * @param Operator $LatestOperator <p>最后操作人，仅共享知识库返回</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name <p>知识库名称</p>
     * @param KBPermission $Permission <p>操作权限</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ProcessingFlagList <p>处理中状态列表</p>
     * @param integer $SharedSubType <p>共享子类型：1=普通，2=公众号<table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>SHARED_KB_SUB_TYPE_UNKNOWN</td><td>0</td><td></td></tr><tr><td>SHARED_KB_SUB_TYPE_NORMAL</td><td>1</td><td>普通</td></tr><tr><td>SHARED_KB_SUB_TYPE_PUBLIC_ACCOUNT</td><td>2</td><td>公众号</td></tr></tbody></table></p>
     * @param string $UpdateTime <p>更新时间（Unix 秒）</p>
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
        if (array_key_exists("AppList",$param) and $param["AppList"] !== null) {
            $this->AppList = [];
            foreach ($param["AppList"] as $key => $value){
                $obj = new Identity();
                $obj->deserialize($value);
                array_push($this->AppList, $obj);
            }
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Creator",$param) and $param["Creator"] !== null) {
            $this->Creator = new Operator();
            $this->Creator->deserialize($param["Creator"]);
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("DocCount",$param) and $param["DocCount"] !== null) {
            $this->DocCount = $param["DocCount"];
        }

        if (array_key_exists("IsExceeded",$param) and $param["IsExceeded"] !== null) {
            $this->IsExceeded = $param["IsExceeded"];
        }

        if (array_key_exists("KbId",$param) and $param["KbId"] !== null) {
            $this->KbId = $param["KbId"];
        }

        if (array_key_exists("KbType",$param) and $param["KbType"] !== null) {
            $this->KbType = $param["KbType"];
        }

        if (array_key_exists("LatestOperator",$param) and $param["LatestOperator"] !== null) {
            $this->LatestOperator = new Operator();
            $this->LatestOperator->deserialize($param["LatestOperator"]);
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Permission",$param) and $param["Permission"] !== null) {
            $this->Permission = new KBPermission();
            $this->Permission->deserialize($param["Permission"]);
        }

        if (array_key_exists("ProcessingFlagList",$param) and $param["ProcessingFlagList"] !== null) {
            $this->ProcessingFlagList = $param["ProcessingFlagList"];
        }

        if (array_key_exists("SharedSubType",$param) and $param["SharedSubType"] !== null) {
            $this->SharedSubType = $param["SharedSubType"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
