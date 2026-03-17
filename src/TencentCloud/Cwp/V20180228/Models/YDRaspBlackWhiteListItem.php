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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 应用防护白名单规则
 *
 * @method integer getId() 获取规则ID
 * @method void setId(integer $Id) 设置规则ID
 * @method integer getLogicalSymbol() 获取逻辑运算符，0: 下面5个有效的正则逻辑与 1: 逻辑或
 * @method void setLogicalSymbol(integer $LogicalSymbol) 设置逻辑运算符，0: 下面5个有效的正则逻辑与 1: 逻辑或
 * @method string getClassNameRegexp() 获取类名正则表达式，为空则不匹配
 * @method void setClassNameRegexp(string $ClassNameRegexp) 设置类名正则表达式，为空则不匹配
 * @method string getSuperClassNameRegexp() 获取父类名正则表达式，为空则不匹配
 * @method void setSuperClassNameRegexp(string $SuperClassNameRegexp) 设置父类名正则表达式，为空则不匹配
 * @method string getInterfacesRegexp() 获取继承的接口正则表达式，为空则不匹配
 * @method void setInterfacesRegexp(string $InterfacesRegexp) 设置继承的接口正则表达式，为空则不匹配
 * @method string getAnnotationsRegexp() 获取注释正则表达式，为空则不匹配
 * @method void setAnnotationsRegexp(string $AnnotationsRegexp) 设置注释正则表达式，为空则不匹配
 * @method string getLoaderClassNameRegexp() 获取所属的类加载器正则表达式，为空则不匹配
 * @method void setLoaderClassNameRegexp(string $LoaderClassNameRegexp) 设置所属的类加载器正则表达式，为空则不匹配
 * @method string getSource() 获取白名单类型，rasp:漏洞防御,memshell_scan:内存马扫描, memshell_inject:内存马注入
 * @method void setSource(string $Source) 设置白名单类型，rasp:漏洞防御,memshell_scan:内存马扫描, memshell_inject:内存马注入
 * @method integer getStatus() 获取状态 (0: 有效 1: 删除，2：无效（启用开关关闭）)
 * @method void setStatus(integer $Status) 设置状态 (0: 有效 1: 删除，2：无效（启用开关关闭）)
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getModifyTime() 获取修改时间
 * @method void setModifyTime(string $ModifyTime) 设置修改时间
 * @method integer getHandleHistory() 获取内存马扫描使用，处理历史事件， 0:不处理 1:处理
 * @method void setHandleHistory(integer $HandleHistory) 设置内存马扫描使用，处理历史事件， 0:不处理 1:处理
 * @method string getContent() 获取rasp和内存马注入使用，匹配内容，POC，可以是正则表达式（MatchMode=5），也可以是字符串
 * @method void setContent(string $Content) 设置rasp和内存马注入使用，匹配内容，POC，可以是正则表达式（MatchMode=5），也可以是字符串
 * @method string getIP() 获取rasp和内存马注入使用，攻击来源ip,不设置就是全部来源，可以多个，可以有ip段，例如：192.168.57.1/24;172.17.0.1
 * @method void setIP(string $IP) 设置rasp和内存马注入使用，攻击来源ip,不设置就是全部来源，可以多个，可以有ip段，例如：192.168.57.1/24;172.17.0.1
 * @method string getPolicyName() 获取规则名称
 * @method void setPolicyName(string $PolicyName) 设置规则名称
 * @method integer getFilterType() 获取rasp和内存马注入使用，加白方式，0：恶意特征加白，1：请求URL加白
 * @method void setFilterType(integer $FilterType) 设置rasp和内存马注入使用，加白方式，0：恶意特征加白，1：请求URL加白
 * @method integer getAttackType() 获取rasp和内存马注入使用，攻击类型，vul.rasp_attacktype_mapping attack_type_id字段
 * @method void setAttackType(integer $AttackType) 设置rasp和内存马注入使用，攻击类型，vul.rasp_attacktype_mapping attack_type_id字段
 * @method integer getMatchMode() 获取rasp和内存马注入使用，匹配模式，0:完全匹配,1：前缀匹配，2：后缀匹配，4：任意匹配，5：部分匹配，6：正则匹配
 * @method void setMatchMode(integer $MatchMode) 设置rasp和内存马注入使用，匹配模式，0:完全匹配,1：前缀匹配，2：后缀匹配，4：任意匹配，5：部分匹配，6：正则匹配
 * @method integer getCWPEffective() 获取生效资产类型，0: 主机不生效 1: 主机生效
 * @method void setCWPEffective(integer $CWPEffective) 设置生效资产类型，0: 主机不生效 1: 主机生效
 * @method integer getCWPScope() 获取0: 一组quuid 1: 所有主机授权的机器
 * @method void setCWPScope(integer $CWPScope) 设置0: 一组quuid 1: 所有主机授权的机器
 * @method array getCWPQuuids() 获取指定生效主机机器
 * @method void setCWPQuuids(array $CWPQuuids) 设置指定生效主机机器
 * @method integer getTCSSEffective() 获取生效资产类型，0: 容器不生效 1: 容器生效
 * @method void setTCSSEffective(integer $TCSSEffective) 设置生效资产类型，0: 容器不生效 1: 容器生效
 * @method integer getTCSSScope() 获取0: 一组quuid 1: 所有容器授权的node
 * @method void setTCSSScope(integer $TCSSScope) 设置0: 一组quuid 1: 所有容器授权的node
 * @method array getTCSSQuuids() 获取指定生效容器节点
 * @method void setTCSSQuuids(array $TCSSQuuids) 设置指定生效容器节点
 * @method integer getEksEffective() 获取生效资产类型，0: 超级节点不生效 1: 超级节点生效
 * @method void setEksEffective(integer $EksEffective) 设置生效资产类型，0: 超级节点不生效 1: 超级节点生效
 * @method integer getEksScope() 获取0: 一组quuid 1: 所有容器授权的超级节点
 * @method void setEksScope(integer $EksScope) 设置0: 一组quuid 1: 所有容器授权的超级节点
 * @method array getEksNodeUniqueID() 获取指定生效容器超级节点
 * @method void setEksNodeUniqueID(array $EksNodeUniqueID) 设置指定生效容器超级节点
 * @method string getCWPMachinesNums() 获取应用资产，全局则：全部主机，否则是选择主机服务器的数量
 * @method void setCWPMachinesNums(string $CWPMachinesNums) 设置应用资产，全局则：全部主机，否则是选择主机服务器的数量
 * @method string getTCSSMachinesNums() 获取应用资产，全局则：全部容器主机节点，否则是选择容器主机节点的数量
 * @method void setTCSSMachinesNums(string $TCSSMachinesNums) 设置应用资产，全局则：全部容器主机节点，否则是选择容器主机节点的数量
 * @method string getEksMachinesNums() 获取应用资产，全局则：全部超级节点，否则是选择超级节点的数量
 * @method void setEksMachinesNums(string $EksMachinesNums) 设置应用资产，全局则：全部超级节点，否则是选择超级节点的数量
 */
class YDRaspBlackWhiteListItem extends AbstractModel
{
    /**
     * @var integer 规则ID
     */
    public $Id;

    /**
     * @var integer 逻辑运算符，0: 下面5个有效的正则逻辑与 1: 逻辑或
     */
    public $LogicalSymbol;

    /**
     * @var string 类名正则表达式，为空则不匹配
     */
    public $ClassNameRegexp;

    /**
     * @var string 父类名正则表达式，为空则不匹配
     */
    public $SuperClassNameRegexp;

    /**
     * @var string 继承的接口正则表达式，为空则不匹配
     */
    public $InterfacesRegexp;

    /**
     * @var string 注释正则表达式，为空则不匹配
     */
    public $AnnotationsRegexp;

    /**
     * @var string 所属的类加载器正则表达式，为空则不匹配
     */
    public $LoaderClassNameRegexp;

    /**
     * @var string 白名单类型，rasp:漏洞防御,memshell_scan:内存马扫描, memshell_inject:内存马注入
     */
    public $Source;

    /**
     * @var integer 状态 (0: 有效 1: 删除，2：无效（启用开关关闭）)
     */
    public $Status;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 修改时间
     */
    public $ModifyTime;

    /**
     * @var integer 内存马扫描使用，处理历史事件， 0:不处理 1:处理
     */
    public $HandleHistory;

    /**
     * @var string rasp和内存马注入使用，匹配内容，POC，可以是正则表达式（MatchMode=5），也可以是字符串
     */
    public $Content;

    /**
     * @var string rasp和内存马注入使用，攻击来源ip,不设置就是全部来源，可以多个，可以有ip段，例如：192.168.57.1/24;172.17.0.1
     */
    public $IP;

    /**
     * @var string 规则名称
     */
    public $PolicyName;

    /**
     * @var integer rasp和内存马注入使用，加白方式，0：恶意特征加白，1：请求URL加白
     */
    public $FilterType;

    /**
     * @var integer rasp和内存马注入使用，攻击类型，vul.rasp_attacktype_mapping attack_type_id字段
     */
    public $AttackType;

    /**
     * @var integer rasp和内存马注入使用，匹配模式，0:完全匹配,1：前缀匹配，2：后缀匹配，4：任意匹配，5：部分匹配，6：正则匹配
     */
    public $MatchMode;

    /**
     * @var integer 生效资产类型，0: 主机不生效 1: 主机生效
     */
    public $CWPEffective;

    /**
     * @var integer 0: 一组quuid 1: 所有主机授权的机器
     */
    public $CWPScope;

    /**
     * @var array 指定生效主机机器
     */
    public $CWPQuuids;

    /**
     * @var integer 生效资产类型，0: 容器不生效 1: 容器生效
     */
    public $TCSSEffective;

    /**
     * @var integer 0: 一组quuid 1: 所有容器授权的node
     */
    public $TCSSScope;

    /**
     * @var array 指定生效容器节点
     */
    public $TCSSQuuids;

    /**
     * @var integer 生效资产类型，0: 超级节点不生效 1: 超级节点生效
     */
    public $EksEffective;

    /**
     * @var integer 0: 一组quuid 1: 所有容器授权的超级节点
     */
    public $EksScope;

    /**
     * @var array 指定生效容器超级节点
     */
    public $EksNodeUniqueID;

    /**
     * @var string 应用资产，全局则：全部主机，否则是选择主机服务器的数量
     */
    public $CWPMachinesNums;

    /**
     * @var string 应用资产，全局则：全部容器主机节点，否则是选择容器主机节点的数量
     */
    public $TCSSMachinesNums;

    /**
     * @var string 应用资产，全局则：全部超级节点，否则是选择超级节点的数量
     */
    public $EksMachinesNums;

    /**
     * @param integer $Id 规则ID
     * @param integer $LogicalSymbol 逻辑运算符，0: 下面5个有效的正则逻辑与 1: 逻辑或
     * @param string $ClassNameRegexp 类名正则表达式，为空则不匹配
     * @param string $SuperClassNameRegexp 父类名正则表达式，为空则不匹配
     * @param string $InterfacesRegexp 继承的接口正则表达式，为空则不匹配
     * @param string $AnnotationsRegexp 注释正则表达式，为空则不匹配
     * @param string $LoaderClassNameRegexp 所属的类加载器正则表达式，为空则不匹配
     * @param string $Source 白名单类型，rasp:漏洞防御,memshell_scan:内存马扫描, memshell_inject:内存马注入
     * @param integer $Status 状态 (0: 有效 1: 删除，2：无效（启用开关关闭）)
     * @param string $CreateTime 创建时间
     * @param string $ModifyTime 修改时间
     * @param integer $HandleHistory 内存马扫描使用，处理历史事件， 0:不处理 1:处理
     * @param string $Content rasp和内存马注入使用，匹配内容，POC，可以是正则表达式（MatchMode=5），也可以是字符串
     * @param string $IP rasp和内存马注入使用，攻击来源ip,不设置就是全部来源，可以多个，可以有ip段，例如：192.168.57.1/24;172.17.0.1
     * @param string $PolicyName 规则名称
     * @param integer $FilterType rasp和内存马注入使用，加白方式，0：恶意特征加白，1：请求URL加白
     * @param integer $AttackType rasp和内存马注入使用，攻击类型，vul.rasp_attacktype_mapping attack_type_id字段
     * @param integer $MatchMode rasp和内存马注入使用，匹配模式，0:完全匹配,1：前缀匹配，2：后缀匹配，4：任意匹配，5：部分匹配，6：正则匹配
     * @param integer $CWPEffective 生效资产类型，0: 主机不生效 1: 主机生效
     * @param integer $CWPScope 0: 一组quuid 1: 所有主机授权的机器
     * @param array $CWPQuuids 指定生效主机机器
     * @param integer $TCSSEffective 生效资产类型，0: 容器不生效 1: 容器生效
     * @param integer $TCSSScope 0: 一组quuid 1: 所有容器授权的node
     * @param array $TCSSQuuids 指定生效容器节点
     * @param integer $EksEffective 生效资产类型，0: 超级节点不生效 1: 超级节点生效
     * @param integer $EksScope 0: 一组quuid 1: 所有容器授权的超级节点
     * @param array $EksNodeUniqueID 指定生效容器超级节点
     * @param string $CWPMachinesNums 应用资产，全局则：全部主机，否则是选择主机服务器的数量
     * @param string $TCSSMachinesNums 应用资产，全局则：全部容器主机节点，否则是选择容器主机节点的数量
     * @param string $EksMachinesNums 应用资产，全局则：全部超级节点，否则是选择超级节点的数量
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("LogicalSymbol",$param) and $param["LogicalSymbol"] !== null) {
            $this->LogicalSymbol = $param["LogicalSymbol"];
        }

        if (array_key_exists("ClassNameRegexp",$param) and $param["ClassNameRegexp"] !== null) {
            $this->ClassNameRegexp = $param["ClassNameRegexp"];
        }

        if (array_key_exists("SuperClassNameRegexp",$param) and $param["SuperClassNameRegexp"] !== null) {
            $this->SuperClassNameRegexp = $param["SuperClassNameRegexp"];
        }

        if (array_key_exists("InterfacesRegexp",$param) and $param["InterfacesRegexp"] !== null) {
            $this->InterfacesRegexp = $param["InterfacesRegexp"];
        }

        if (array_key_exists("AnnotationsRegexp",$param) and $param["AnnotationsRegexp"] !== null) {
            $this->AnnotationsRegexp = $param["AnnotationsRegexp"];
        }

        if (array_key_exists("LoaderClassNameRegexp",$param) and $param["LoaderClassNameRegexp"] !== null) {
            $this->LoaderClassNameRegexp = $param["LoaderClassNameRegexp"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("HandleHistory",$param) and $param["HandleHistory"] !== null) {
            $this->HandleHistory = $param["HandleHistory"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("IP",$param) and $param["IP"] !== null) {
            $this->IP = $param["IP"];
        }

        if (array_key_exists("PolicyName",$param) and $param["PolicyName"] !== null) {
            $this->PolicyName = $param["PolicyName"];
        }

        if (array_key_exists("FilterType",$param) and $param["FilterType"] !== null) {
            $this->FilterType = $param["FilterType"];
        }

        if (array_key_exists("AttackType",$param) and $param["AttackType"] !== null) {
            $this->AttackType = $param["AttackType"];
        }

        if (array_key_exists("MatchMode",$param) and $param["MatchMode"] !== null) {
            $this->MatchMode = $param["MatchMode"];
        }

        if (array_key_exists("CWPEffective",$param) and $param["CWPEffective"] !== null) {
            $this->CWPEffective = $param["CWPEffective"];
        }

        if (array_key_exists("CWPScope",$param) and $param["CWPScope"] !== null) {
            $this->CWPScope = $param["CWPScope"];
        }

        if (array_key_exists("CWPQuuids",$param) and $param["CWPQuuids"] !== null) {
            $this->CWPQuuids = $param["CWPQuuids"];
        }

        if (array_key_exists("TCSSEffective",$param) and $param["TCSSEffective"] !== null) {
            $this->TCSSEffective = $param["TCSSEffective"];
        }

        if (array_key_exists("TCSSScope",$param) and $param["TCSSScope"] !== null) {
            $this->TCSSScope = $param["TCSSScope"];
        }

        if (array_key_exists("TCSSQuuids",$param) and $param["TCSSQuuids"] !== null) {
            $this->TCSSQuuids = $param["TCSSQuuids"];
        }

        if (array_key_exists("EksEffective",$param) and $param["EksEffective"] !== null) {
            $this->EksEffective = $param["EksEffective"];
        }

        if (array_key_exists("EksScope",$param) and $param["EksScope"] !== null) {
            $this->EksScope = $param["EksScope"];
        }

        if (array_key_exists("EksNodeUniqueID",$param) and $param["EksNodeUniqueID"] !== null) {
            $this->EksNodeUniqueID = $param["EksNodeUniqueID"];
        }

        if (array_key_exists("CWPMachinesNums",$param) and $param["CWPMachinesNums"] !== null) {
            $this->CWPMachinesNums = $param["CWPMachinesNums"];
        }

        if (array_key_exists("TCSSMachinesNums",$param) and $param["TCSSMachinesNums"] !== null) {
            $this->TCSSMachinesNums = $param["TCSSMachinesNums"];
        }

        if (array_key_exists("EksMachinesNums",$param) and $param["EksMachinesNums"] !== null) {
            $this->EksMachinesNums = $param["EksMachinesNums"];
        }
    }
}
